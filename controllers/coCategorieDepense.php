<?php
require '../tools/tools.php';
require '../class/Action.php';
require '../class/CategorieDepense.php';
require '../models/moCategorieDepense.php';
$_ACTION = new Action(); //Instance de la class Action pour le CRUD
$_ModelCategorieDepense = new moCategorieDepense(); // Instance de la class Model couche d'acces à la BD
$_CategorieDepense = new CategorieDepense();


// SelectAll CategorieDepense =
if ($_REQUEST_ACTION != null && $_REQUEST_ACTION == $_ACTION::$SelectAll && $_REQUEST_METHOD == 'GET') {

    $_RESPONSE = GET_ALL($_REQUEST_ACTION, $_CategorieDepense, $_ModelCategorieDepense, $tools);
}

// Insert or Update CategorieDepense
if ($_REQUEST_METHOD == 'POST') {
    if ($_REQUEST_ACTION != null && ($_REQUEST_ACTION == $_ACTION::$Insert || $_REQUEST_ACTION == $_ACTION::$UpdateById)) {
        if (
            isset($_REQUEST['libelle']) && !empty($_REQUEST['libelle']) &&
            isset($_REQUEST['description']) && !empty($_REQUEST['description']) &&
            isset($_REQUEST['createdBy']) && !empty($_REQUEST['createdBy'])
        ) {
            $_CategorieDepense -> setCategorieDepenseId(isset($_REQUEST['CategorieDepenseId']) && !empty($_REQUEST['CategorieDepenseId']) && $_REQUEST['CategorieDepenseId'] != 'undefined' && $_REQUEST['CategorieDepenseId'] != 'null' ? $_REQUEST['CategorieDepenseId'] : $tools::generateGuid());
            $_CategorieDepense->setLibelle($_REQUEST['libelle']);
            $_CategorieDepense->setDescription($_REQUEST['description']);
            $_CategorieDepense->setCreatedBy($_REQUEST['createdBy']);;
            $_CategorieDepense->setAction($_REQUEST_ACTION);
            //Insertion en base
            $_Response = $_ModelCategorieDepense->crudCategorieDepense($_CategorieDepense);
            //  print_r($_Response);
            $_RESPONSE = $tools::getMessageSuccess($_Response);
        } else {
            $_RESPONSE = $tools::getMessageEmpty();
        }
    }
}

// Delete CategorieDepense
if ($_REQUEST_ACTION != null && $_REQUEST_ACTION == $_ACTION::$DeleteById && $_REQUEST_METHOD == 'DELETE') {
    if (isset($_REQUEST['utilisateurId'])) {
        $_CategorieDepense = new $_CategorieDepense();
        $_CategorieDepense->setAction($_REQUEST_ACTION);
        $_CategorieDepense->setUtilisateurId($_REQUEST['']);CategorieDepense::
        $_Response = $_ModelUtilisateur->crudUtilisateur($_CategorieDepense);

        $_RESPONSE = $tools::getMessageSuccess($_Response);
    } else {
        $_RESPONSE = $tools::getMessageEmpty();
    }
}




// Liste des fonctions
function GET_ALL($_REQUEST_ACTION, CategorieDepense $_CategorieDepense, moCategorieDepense $_ModelCategorieDepense, $tools)
{
    //Traitement de la connexion
    $_CategorieDepense->setAction($_REQUEST_ACTION);

    $_Response = $_ModelCategorieDepense->crudCategorieDepense($_CategorieDepense);

    return $tools::getMessageError($_Response != null && $_Response != 1 && sizeof($_Response) > 0 ? $_Response : array());
}
echo json_encode($_RESPONSE);
