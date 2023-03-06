<?php
/**
 * Created by PhpStorm.
 * User: pablo
 * Date: 21/08/2019
 * Time: 11:17
 */
require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
class bdd extends Action

{
    protected $_REQUEST_BDENAME;
    // Server Online
     /*private $host = "dm830513-001.privatesql:35211";
      private $userName= "geeksquad";
      private $userPass= "GeekSquad225";
      private $dbName= "iteliya_masterbd";*/

    // Guest Team server
    /* private $host ='192.168.1.115';
       private $userName= 'syabe';
       private $userPass= 'GeekSqu@d225'; */

    // Syabe server
       /* private $host ='192.168.1.100';
      private $userName= 'syabe';
      private $userPass= 'GeekSqu@d225';
      */

    // My localhost server
    private $host = '';
    private $userName= '';
    private $userPass= '';
    //protected $dbName= 'iteliya_masterbd_test';
    protected $dbName= 'iteliya_masterbd';

    private $dns;
    protected $connexion;
    public $Query;
    public $Response = 190;
    public $ResponseError = 2;

    public function __construct() {
        if( strpos($this->getDomaine(), 'localhost')) {
            /*$this->host     = 'localhost';
            $this->userName = 'geeksquad';
            $this->userPass = '';*/

            $this->host     = 'bdd.ovh.syabe-tech.com:13307';
            $this->userName = 'geeksquaddevaccount';
            $this->userPass = 'GeekSquad@225_Dev_Account';

        } else if( strpos($this->getDomaine(), 'development')) {
            $this->host     = 'bdd.ovh.syabe-tech.com:13307';
            $this->userName = 'geeksquaddevaccount';
            $this->userPass = 'GeekSquad@225_Dev_Account';
        }
        else {
            $this->userName = 'geeksquad';
            $this->userPass = 'GeekSquad@225';
            $this->host     = 'bdd.ovh.syabe-tech.com:13306';
        }

        $this->open();
    }
    
    // Ouverture de connextion sur la base de données secondaire
    protected function open()
    {
        /* var_dump($this->host);
        die(); */
        $this->setDataBaseInfo();
        
        try {
            $this->dns = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
            //print_r($this->dns);
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
    private function setDataBaseInfo(){
        //print_r($this->_REQUEST_BDENAME);
        if(!isset($this->_REQUEST_BDENAME) || (isset($this->_REQUEST_BDENAME) &&  empty($this->_REQUEST_BDENAME)) ) { 
            $this->dbName = 'iteliya_masterbd';
            return;
        }
        // Récuperation des informations de la base primare suivant la clé
        $this->dbName = !empty($this->_REQUEST_BDENAME) ? $this->_REQUEST_BDENAME : 'teliya_Emptybd';
       
    }

    public function beginTrans()
    {
       
        return $this -> connexion -> beginTransaction();
        
    }

    public function commitTrans()
    {
        return $this -> connexion -> commit();
    }

    public function rollbackTrans()
    {
        return $this -> connexion -> rollBack();
    }

    public function setDataBaseName($_REQUEST_BDENAME)
    {        
        $this -> _REQUEST_BDENAME = $_REQUEST_BDENAME;
        // print_r($this -> _REQUEST_BDENAME);
    }
    public function prepareQuery()
    {
        return $this -> connexion -> prepare($this->Query);
    }
    public function errorMsg(PDOException $error){
        $logger = new Logger('Log');
        $logger->pushHandler(new StreamHandler(__DIR__.'/../logFiles/log_'.Date('d-m-Y').'.log', Logger::ERROR));
        $Msg = 'ERREUR PDO dans ' . $error->getFile() . ' Ligne. ' . $error->getLine() . ' : ' . $error->getMessage();
        $logger->error('Une erreur est survenue', [
            'File' => $error->getFile(),
            'Message' => $error->getMessage(),
            'Line' => $error->getLine(),
            'Code' => $error->getCode(),
            'Previous' => $error->getPrevious(),
            'Trace' => $error->getTrace(),
            'TraceStr' => $error->getTraceAsString(),
        ]);

        die($Msg);
        return $Msg;
    }
    
    public static function getDomaine() {
        //return (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/BackEnd/";
        return (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]/API_REST_TELIYA_ADMIN/";
    }
}
