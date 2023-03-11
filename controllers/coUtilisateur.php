<?php
require '../tools/tools.php';
require '../class/Action.php';
require '../class/Utilisateur.php';
require '../models/moUtilisateur.php';
$_ACTION = new Action(); //Instance de la class Action pour le CRUD
$_ModelUtilisateur = new moUtilisateur(); // Instance de la class Model couche d'acces à la BD
$_Utilisateur = new Utilisateur();



if ($_REQUEST_ACTION != null && $_REQUEST_ACTION == $_ACTION::$SelectAll && $_REQUEST_METHOD == 'GET') {

    $_RESPONSE = GET_ALL($_REQUEST_ACTION, $_Utilisateur, $_ModelUtilisateur, $tools);
}

if ($_REQUEST_METHOD == 'POST') {
    if ($_REQUEST_ACTION != null && ($_REQUEST_ACTION == $_ACTION::$Insert || $_REQUEST_ACTION == $_ACTION::$UpdateById)) {
        if (
            isset($_REQUEST['nom']) && !empty($_REQUEST['nom']) &&
            isset($_REQUEST['prenom']) && !empty($_REQUEST['prenom']) &&
            isset($_REQUEST['noDeTelephone']) && !empty($_REQUEST['noDeTelephone']) &&
           isset($_REQUEST['createdBy']) && !empty($_REQUEST['createdBy'])


        ) {
            $_Utilisateur -> setUtilisateurId(isset($_REQUEST['utilisateurId']) && !empty($_REQUEST['utilisateurId']) && $_REQUEST['utilisateurId'] != 'undefined' && $_REQUEST['utilisateurId'] != 'null' ? $_REQUEST['utilisateurId'] : $tools::generateGuid());
            $_Utilisateur->setNom($_REQUEST['nom']);
            $_Utilisateur->setPrenom($_REQUEST['prenom']);
            $_Utilisateur->setNoDeTelephone($_REQUEST['noDeTelephone']);
            $_Utilisateur->setCreatedBy($_REQUEST['createdBy']);;
            $_Utilisateur->setAction($_REQUEST_ACTION);
            //Insertion en base
            $_Response = $_ModelUtilisateur->crudUtilisateur($_Utilisateur);
            $_RESPONSE = $tools::getMessageSuccess($_Response);
        } else {
            $_RESPONSE = $tools::getMessageEmpty();
        }
    }

}

if ($_REQUEST_ACTION != null && $_REQUEST_ACTION == $_ACTION::$DeleteById) {
    if (isset($_REQUEST['utilisateurId'])) {

        $_Utilisateur = new $_Utilisateur();
        $_Utilisateur->setAction($_REQUEST_ACTION);
        $_Utilisateur->setUtilisateurId($_REQUEST['utilisateurId']);
        $_Response = $_ModelUtilisateur->crudUtilisateur($_Utilisateur);

        $_RESPONSE = $tools::getMessageSuccess($_Response);
    } else {
        $_RESPONSE = $tools::getMessageEmpty();
    }
}

// Liste des fonctions
function GET_ALL($_REQUEST_ACTION, Utilisateur $_Utilisateur, moUtilisateur $_ModelUtilisateur, $tools)
{
    //Traitement de la connexion
    $_Utilisateur->setAction($_REQUEST_ACTION);

    $_Response = $_ModelUtilisateur->crudUtilisateur($_Utilisateur);

    return $tools::getMessageError($_Response != null && $_Response != 1 && sizeof($_Response) > 0 ? $_Response : array());
}
echo json_encode($_RESPONSE);
