<?php
require '../tools/tools.php';
require '../class/Action.php';
require '../class/Depense.php';
require '../models/moDepense.php';
$_ACTION = new Action(); //Instance de la class Action pour le CRUD
$_ModelDepense = new moDepense(); // Instance de la class Model couche d'acces à la BD
$_Depense = new Depense();


// SelectAll Depense =
if ($_REQUEST_ACTION != null && $_REQUEST_ACTION == $_ACTION::$SelectAll && $_REQUEST_METHOD == 'GET') {

    $_RESPONSE = GET_ALL($_REQUEST_ACTION, $_Depense, $_ModelDepense, $tools);
}

// Insert or Update Depense
if ($_REQUEST_METHOD == 'POST') {
    if ($_REQUEST_ACTION != null && ($_REQUEST_ACTION == $_ACTION::$Insert || $_REQUEST_ACTION == $_ACTION::$UpdateById)) {
        if (
            isset($_REQUEST['libelle']) && !empty($_REQUEST['libelle']) &&
            isset($_REQUEST['montant']) && !empty($_REQUEST['montant']) &&
            isset($_REQUEST['createdBy']) && !empty($_REQUEST['createdBy'])
        ) {
            $_Depense->setDepenseId(isset($_REQUEST['depenseId']) && !empty($_REQUEST['depenseId']) && $_REQUEST['depenseId'] != 'undefined' && $_REQUEST['depenseId'] != 'null' ? $_REQUEST['depenseId'] : $tools::generateGuid());
            $_Depense->setLibelle($_REQUEST['libelle']);
            $_Depense->setmontant($_REQUEST['montant']);
            $_Depense->setUtilisateurId(isset($_REQUEST['utilisateurId']) && !empty($_REQUEST['utilisateurId']) && $_REQUEST['utilisateurId'] != 'undefined' && $_REQUEST['utilisateurId'] != 'null' ? $_REQUEST['utilisateurId'] : $tools::generateGuid());
            $_Depense->setCategorieDepenseId(isset($_REQUEST['categorieDepenseId']) && !empty($_REQUEST['categorieDepenseId']) && $_REQUEST['categorieDepenseId'] != 'undefined' && $_REQUEST['categorieDepenseId'] != 'null' ? $_REQUEST['categorieDepenseId'] : $tools::generateGuid());
            $_Depense->setCreatedBy($_REQUEST['createdBy']);;
            $_Depense->setAction($_REQUEST_ACTION);
            //Insertion en base
            $_Response = $_ModelDepense->crudDepense($_Depense);
            //  print_r($_Response);
            $_RESPONSE = $tools::getMessageSuccess($_Response);
        } else {
            $_RESPONSE = $tools::getMessageEmpty();
        }
    }
}

// Delete Depense
if ($_REQUEST_ACTION != null && $_REQUEST_ACTION == $_ACTION::$DeleteById && $_REQUEST_METHOD == 'DELETE') {
    if (isset($_REQUEST['depenseId'])) {
        $_Depense = new $_Depense();
        $_Depense->setAction($_REQUEST_ACTION);
        $_Depense->setDepenseId($_REQUEST['depenseId']);
        $_Response = $_ModelDepense->crudDepense($_Depense);

        $_RESPONSE = $tools::getMessageSuccess($_Response);
    } else {
        $_RESPONSE = $tools::getMessageEmpty();
    }
}




// Liste des fonctions
function GET_ALL($_REQUEST_ACTION, Depense $_Depense, moDepense $_ModelDepense, $tools)
{
    //Traitement de la connexion
    $_Depense->setAction($_REQUEST_ACTION);

    $_Response = $_ModelDepense->crudDepense($_Depense);

    return $tools::getMessageError($_Response != null && $_Response != 1 && sizeof($_Response) > 0 ? $_Response : array());
}
echo json_encode($_RESPONSE);
