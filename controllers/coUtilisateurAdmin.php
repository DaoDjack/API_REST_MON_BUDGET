<?php
require '../tools/tools.php';
require '../class/Action.php';
require '../class/UtilisateurAdmin.php';
require '../models/moUtilisateurAdmin.php';
$_ACTION = new Action(); //Instance de la class Action pour le CRUD
$_ModelUtilisateurAdmin = new moUtilisateurAdmin(); // Instance de la class Model couche d'acces à la BD
$_UtilisateurAdmin = new UtilisateurAdmin();

try {
    $res = $tools::tokenManager();

if ($_REQUEST_ACTION != null && $_REQUEST_ACTION == $_ACTION::$SelectAll && $_REQUEST_METHOD == 'GET') {

    $_RESPONSE = GET_ALL($_REQUEST_ACTION, $_UtilisateurAdmin, $_ModelUtilisateurAdmin, $tools);
}

if ($_REQUEST_METHOD == 'POST') {
    if ($_REQUEST_ACTION != null && ($_REQUEST_ACTION == $_ACTION::$Insert || $_REQUEST_ACTION == $_ACTION::$UpdateById)) {
        if (
            isset($_REQUEST['nom']) && !empty($_REQUEST['nom']) &&
            isset($_REQUEST['prenom']) && !empty($_REQUEST['prenom']) &&
            isset($_REQUEST['contact']) && !empty($_REQUEST['contact']) &&
           isset($_REQUEST['email']) && !empty($_REQUEST['email']) &&
          isset($_REQUEST['role']) && !empty($_REQUEST['role'])


        ) {
            $_UtilisateurAdmin -> setUtilisateurAdminId(isset($_REQUEST['utilisateurAdminId']) && !empty($_REQUEST['utilisateurAdminId']) && $_REQUEST['utilisateurAdminId'] != 'undefined' && $_REQUEST['utilisateurAdminId'] != 'null' ? $_REQUEST['utilisateurAdminId'] : $tools::generateGuid());
            $_UtilisateurAdmin->setNom($_REQUEST['nom']);
            $_UtilisateurAdmin->setPrenom($_REQUEST['prenom']);
            $_UtilisateurAdmin->setContact($_REQUEST['contact']);
            $_UtilisateurAdmin->setEmail($_REQUEST['email']);
            $_UtilisateurAdmin->setRole($_REQUEST['role']);
            $_UtilisateurAdmin->setCreatedBy($_REQUEST['createdBy']);;
            $_UtilisateurAdmin->setAction($_REQUEST_ACTION);
            //Insertion en base
            $_Response = $_ModelUtilisateurAdmin->crudUtilisateurAdmin($_UtilisateurAdmin);
            $_RESPONSE = $tools::getMessageSuccess($_Response);
        } else {
            $_RESPONSE = $tools::getMessageEmpty();
        }
    }

}

if ($_REQUEST_ACTION != null && $_REQUEST_ACTION == $_ACTION::$DeleteById) {
    if (isset($_REQUEST['utilisateurAdminId'])) {

        $_UtilisateurAdmin = new UtilisateurAdmin();
        $_UtilisateurAdmin->setAction($_REQUEST_ACTION);
        $_UtilisateurAdmin->setUtilisateurAdminId($_REQUEST['utilisateurAdminId']);
        $_Response = $_ModelUtilisateurAdmin->crudUtilisateurAdmin($_UtilisateurAdmin);

        $_RESPONSE = $tools::getMessageSuccess($_Response);
    } else {
        $_RESPONSE = $tools::getMessageEmpty();
    }
}

}
catch (Exception $e) {
    http_response_code(401);
}
// Liste des fonctions
function GET_ALL($_REQUEST_ACTION, UtilisateurAdmin $_UtilisateurAdmin, moUtilisateurAdmin $_ModelUtilisateurAdmin, $tools)
{
    //Traitement de la connexion
    $_UtilisateurAdmin->setAction($_REQUEST_ACTION);

    $_Response = $_ModelUtilisateurAdmin->crudUtilisateurAdmin($_UtilisateurAdmin);

    return $tools::getMessageError($_Response != null && $_Response != 1 && sizeof($_Response) > 0 ? $_Response : array());
}
echo json_encode($_RESPONSE);
