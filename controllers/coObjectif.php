<?php
require '../tools/tools.php';
require '../class/Action.php';
require '../class/Objectif.php';
require '../models/moObjectif.php';
$_ACTION = new Action(); //Instance de la class Action pour le CRUD
$_ModelObjectif = new moObjectif(); // Instance de la class Model couche d'acces à la BD
$_Objectif= new Objectif();


// SelectAll Utilisateur =
if ($_REQUEST_ACTION != null && $_REQUEST_ACTION == $_ACTION::$SelectAll && $_REQUEST_METHOD == 'GET') {

    $_RESPONSE = GET_ALL($_REQUEST_ACTION, $_Objectif, $_ModelObjectif, $tools);
}

// Insert or Update Utilisateur
if ($_REQUEST_METHOD == 'POST') {
    if ($_REQUEST_ACTION != null && ($_REQUEST_ACTION == $_ACTION::$Insert || $_REQUEST_ACTION == $_ACTION::$UpdateById)) {
        if (
            isset($_REQUEST['libelle']) && !empty($_REQUEST['libelle']) &&
            isset($_REQUEST['montant']) && !empty($_REQUEST['montant']) &&
            isset($_REQUEST['createdBy']) && !empty($_REQUEST['createdBy'])
        ) {
            $_Objectif -> setObjectifsId(isset($_REQUEST['objectifId']) && !empty($_REQUEST['objectifId']) && $_REQUEST['objectifId'] != 'undefined' && $_REQUEST['objectifId'] != 'null' ? $_REQUEST['objectifId'] : $tools::generateGuid());
            $_Objectif->setLibelle($_REQUEST['libelle']);
            $_Objectif->setmontant($_REQUEST['montant']);
            $_Objectif -> setUtilisateurId(isset($_REQUEST['utilisateurId']) && !empty($_REQUEST['utilisateurId']) && $_REQUEST['utilisateurId'] != 'undefined' && $_REQUEST['utilisateurId'] != 'null' ? $_REQUEST['utilisateurId'] : $tools::generateGuid());
            $_Objectif->setCreatedBy($_REQUEST['createdBy']);;
            $_Objectif->setAction($_REQUEST_ACTION);
            //Insertion en base
            $_Response = $_ModelObjectif->crudObjectif($_Objectif);
            //  print_r($_Response);
            $_RESPONSE = $tools::getMessageSuccess($_Response);
        } else {
            $_RESPONSE = $tools::getMessageEmpty();
        }
    }
}

// Delete Utilisateur
if ($_REQUEST_ACTION != null && $_REQUEST_ACTION == $_ACTION::$DeleteById && $_REQUEST_METHOD == 'DELETE') {
    if (isset($_REQUEST['objectifId'])) {
        $_Objectif = new $_Objectif();
        $_Objectif->setAction($_REQUEST_ACTION);
        $_Objectif->setObjectifsId($_REQUEST['ObjectifId']);
        $_Response = $_ModelObjectif->crudObjectif($_Objectif);

        $_RESPONSE = $tools::getMessageSuccess($_Response);
    } else {
        $_RESPONSE = $tools::getMessageEmpty();
    }
}




// Liste des fonctions
function GET_ALL($_REQUEST_ACTION, Objectif $_Objectif, moObjectif $_ModelObjectif, $tools)
{
    //Traitement de la connexion
    $_Objectif->setAction($_REQUEST_ACTION);

    $_Response = $_ModelObjectif->crudObjectif($_Objectif);

    return $tools::getMessageError($_Response != null && $_Response != 1 && sizeof($_Response) > 0 ? $_Response : array());
}
echo json_encode($_RESPONSE);
