<?php
require '../tools/tools.php';
require '../class/Action.php';
require '../class/Depot.php';
require '../models/moDepot.php';
$_ACTION = new Action(); //Instance de la class Action pour le CRUD
$_ModelDepot = new moDepot(); // Instance de la class Model couche d'acces à la BD
$_Depot = new Depot();


// SelectAll Utilisateur =
if ($_REQUEST_ACTION != null && $_REQUEST_ACTION == $_ACTION::$SelectAll && $_REQUEST_METHOD == 'GET') {

    $_RESPONSE = GET_ALL($_REQUEST_ACTION, $_Depot, $_ModelDepot, $tools);
}

// Insert or Update Utilisateur
if ($_REQUEST_METHOD == 'POST') {
    if ($_REQUEST_ACTION != null && ($_REQUEST_ACTION == $_ACTION::$Insert || $_REQUEST_ACTION == $_ACTION::$UpdateById)) {
        if (
            isset($_REQUEST['montant']) && !empty($_REQUEST['montant']) &&
            isset($_REQUEST['dateDepot']) && !empty($_REQUEST['dateDepot']) &&
            isset($_REQUEST['createdBy']) && !empty($_REQUEST['createdBy'])
        ) {
            $_Depot -> setdepotId(isset($_REQUEST['depotId']) && !empty($_REQUEST['depotId']) && $_REQUEST['depotId'] != 'undefined' && $_REQUEST['depotId'] != 'null' ? $_REQUEST['depotId'] : $tools::generateGuid());
            $_Depot ->setMontant($_REQUEST['montant']);
            $_Depot ->setDateDepot($_REQUEST['dateDepot']);
            $_Depot ->setObjectifsId(isset($_REQUEST['objectifsId']) && !empty($_REQUEST['objectifsId']) && $_REQUEST['objectifsId'] != 'undefined' && $_REQUEST['objectifsId'] != 'null' ? $_REQUEST['objectifsId'] : $tools::generateGuid());
            $_Depot ->setCreatedBy($_REQUEST['createdBy']);;
            $_Depot ->setAction($_REQUEST_ACTION);
            //Insertion en base
            $_Response = $_ModelDepot->crudDepot( $_Depot);
            //  print_r($_Response);
            $_RESPONSE = $tools::getMessageSuccess($_Response);
        } else {
            $_RESPONSE = $tools::getMessageEmpty();
        }
    }
}

// Delete Utilisateur
if ($_REQUEST_ACTION != null && $_REQUEST_ACTION == $_ACTION::$DeleteById && $_REQUEST_METHOD == 'DELETE') {
    if (isset($_REQUEST['depotId'])) {
        $_Depot= new $_Depot();
        $_Depot->setAction($_REQUEST_ACTION);
        $_Depot->setdepotId($_REQUEST['depotId']);
        $_Response = $_ModelDepot->cruddepot( $_Depot);

        $_RESPONSE = $tools::getMessageSuccess($_Response);
    } else {
        $_RESPONSE = $tools::getMessageEmpty();
    }
}




// Liste des fonctions
function GET_ALL($_REQUEST_ACTION, Depot  $_Depot, moDepot $_ModelDepot, $tools)
{
    //Traitement de la connexion
    $_Depot->setAction($_REQUEST_ACTION);

    $_Response = $_ModelDepot->crudDepot($_Depot);

    return $tools::getMessageError($_Response != null && $_Response != 1 && sizeof($_Response) > 0 ? $_Response : array());
}
echo json_encode($_RESPONSE);
