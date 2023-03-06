<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 20/05/2020
 * Time: 15:46
 */

class Action
{
    public static $Insert = 'Insert';
    public static $Add = 'Add';
    public static $SelectAll = 'SelectAll';
    public static $SelectAllBy = 'SelectAllBy';
    public static $SelectById = 'SelectById';
    public static $UpdateById = 'UpdateById';
    public static $DeleteById = 'DeleteById';
    public static $Delete = 'Delete';
    public static $Connect = 'Connect';
    public static $ConnectAdmin = 'ConnectAdmin';
    public static $Disconnect = 'Disconnect';
    public static $Filtre = 'Filtre';
    public static $Rechercher = 'Rechercher';
    public static $Retrouver = 'Retrouver';
    public static $List = 'List';
    public static $ListBy = 'ListBy';
    public static $ListAll = 'ListAll';
    public static $ListAllBy = 'ListAllBy';
    public static $SelectAllData = 'SelectAllData';
    public static $SelectAllDataBy = 'SelectAllDataBy';
    public static $Select = 'Select';
    public static $SelectBy = 'SelectBy';
    public static $Load = 'Load';
    public static $LoadAll = 'LoadAll';

    public static $LastCmd = 'lastCmd';
    public static $EDependeEntree = 'evolutionDepenseEntree';
    public static $Echarge = 'evolutionCharge';
    public static $NbreCmd = 'nbreCmd';
    public static $NbreCmdOwner = 'nbreCmdOwner';
    public static $TotalCmd = 'totalCmd';
    public static $TotalCmdOwner = 'totalCmdOwner';
    public static $TotalDepEntr = 'totalDepEnt';
    public static $TotalCharge = 'totalCharge';
    public static $ChargeSalariale = 'ChargeSalariale';

    public static $contrat = 'contrat';
    public static $enginshistorique = 'enginshistorique';
    public static $alllivraison = 'alllivraison';
    public static $cash = 'cash';
    public static $evolution = 'evolution';
    public static $absences = 'absences';
    public static $accidents = 'accidents';
    public static $TotalSoldeDays = 'Days';
    public static $TotalSoldeYesterday = 'Days-1';
    public static $TotalSolde = 'AllDays';
    public static $SoldeDay = 'SoldeDay';
    public static $Cloturer = 'Cloturer';
    public static $DtCaisse = 'DtCaisse';

    public static $nbreClient = 'nbreClient';
    public static $nbreCmd = 'nbreCmd';
    public static $nbreCmdOwner = 'nbreCmdOwner';
    public static $montantTotal = 'montantTotal';
    public static $partEntreprise = 'partEntreprise';
    public static $recapClient = 'recapClient';
    public static $detailsRevenue = 'detailsRevenue';
    public static $rewardDetails = 'rewardDetails';
    public static $ownerDetails = 'ownerDetails';
    public static $evolutionGain = 'evolutionGain';
    public static $evolutionGainPerClient = 'evolutionGainPerClient';
    public static $invoices = 'invoices';
    public static $InsertDtFacture = 'InsertDtFacture';
    public static $InvoicesParClient = 'InvoicesParClient';
    public static $AllInvoices = 'AllInvoices';
    public static $mtAEncaisser = 'mtAEncaisser';
    public static $mtAFacturer = 'mtAFacturer';
    public static $montantFacture = 'montantFacture';
    public static $montantRegle = 'montantRegle';
    public static $visualiserFacture = 'visualiserFacture';
    public static $detailsTransactions = 'detailsTransactions';
    public static $nombreTransactions = 'nombreTransactions';
    public static $soldeClient = 'soldeClient';
    public static $revenueClient = 'revenueClient';
    public static $allCommande = 'allCommande';
    public static $ChargeSalarialeAll= 'ChargeSalarialeAll';
    public static $clientDetails= 'clientDetails';
    public static $SendMail = 'SendMail';
    public static $livreurPerformance = 'livreurPerformance';
    public static $Contraventions = 'Contraventions';
    public static $DayBefore = 'DayBefore';

    /**
     * Action constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getInsert()
    {
        return $this::$Insert;
    }

    /**
     * @param mixed $Insert
     */
    public function setInsert($Insert)
    {
        $this::$Insert = $Insert;
    }

    /**
     * @return string
     */
    public static function getAdd(): string
    {
        return self::$Add;
    }

    /**
     * @param string $Add
     */
    public static function setAdd(string $Add)
    {
        self::$Add = $Add;
    }

    /**
     * @return mixed
     */
    public function getSelectAll()
    {
        return $this::$SelectAll;
    }

    /**
     * @param mixed $SelectAll
     */
    public function setSelectAll($SelectAll)
    {
        $this::$SelectAll = $SelectAll;
    }

    /**
     * @return mixed
     */
    public function getSelectAllBy()
    {
        return $this::$SelectAllBy;
    }

    /**
     * @param mixed $SelectAllBy
     */
    public function setSelectAllBy($SelectAllBy)
    {
        $this::$SelectAllBy = $SelectAllBy;
    }

    /**
     * @return mixed
     */
    public function getSelectById()
    {
        return $this::$SelectById;
    }

    /**
     * @param mixed $SelectById
     */
    public function setSelectById($SelectById)
    {
        $this::$SelectById = $SelectById;
    }

    /**
     * @return mixed
     */
    public function getUpdateById()
    {
        return $this::$UpdateById;
    }

    /**
     * @param mixed $UpdateById
     */
    public function setUpdateById($UpdateById)
    {
        $this::$UpdateById = $UpdateById;
    }

    /**
     * @return mixed
     */
    public function getDeleteById()
    {
        return $this::$DeleteById;
    }

    /**
     * @param mixed $DeleteById
     */
    public function setDeleteById($DeleteById)
    {
        $this::$DeleteById = $DeleteById;
    }

    /**
     * @return string
     */
    public static function getDelete(): string
    {
        return self::$Delete;
    }

    /**
     * @param string $Delete
     */
    public static function setDelete(string $Delete)
    {
        self::$Delete = $Delete;
    }
}
