<?php
/**
 * Created by PhpStorm.
 * User: pablo
 * Date: 21/08/2019
 * Time: 11:17
 */

class bdd extends Action

{
    protected $_REQUEST_BDENAME;

    // My localhost server
    private $host = 'localhost';
    private $userName = 'geeksquad';
    private $userPass = '';
    protected $dbName = 'gestion_budget_1_bd';

    private $dns;
    protected $connexion;
    public $Query;
    public $Response = 190;
    public $ResponseError = 2;

    public function __construct()
    {
        $this->open();
    }

    // Ouverture de connextion sur la base de données secondaire
    protected function open()
    {
        try {
            $this->dns = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
           // print_r($this->dns);
            $option = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC
            );

            $this->connexion = new PDO($this->dns, $this->userName, $this->userPass, $option);

            $this->connexion->exec("Set names utf8");
        } catch (PDOException $e) {
            $Msg = 'Erreur PDO dans ' . $e->getFile() . ' Ligne ' . $e->getLine() . ' : ' . $e->getMessage();
            die($Msg);
        }
    }

    // Mise à jour des parametre de connexion



    public function beginTrans()
    {

        return $this->connexion->beginTransaction();

    }

    public function commitTrans()
    {
        return $this->connexion->commit();
    }

    public function rollbackTrans()
    {
        return $this->connexion->rollBack();
    }

       public function prepareQuery()
    {
        return $this->connexion->prepare($this->Query);
    }

    public function errorMsg(PDOException $error){
              $Msg = 'ERREUR PDO dans ' . $error->getFile() . ' Ligne. ' . $error->getLine() . ' : ' . $error->getMessage();
              die($Msg);
        return $Msg;
    }
}
