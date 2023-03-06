<?php
include 'messageError.php';
class NewClient extends messageError
{
    private  $id;
    private  $clientId;
    private  $raisonSocial;
    private  $rccm;
    private  $logo;
    private  $tel;
    private  $fax;
    private  $email;
    private  $siteWeb;
    private  $cniPropietaire;
    private  $nomProprietaire;
    private  $prenomProprietaire;
    private  $SexeProprietaire;
    private  $telProprietaire;
    private  $emailProprietaire;
    private  $createdby;
    private  $createdon;
    private  $status;
    private $action;
    private $dbName;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param mixed $clientId
     */
    public function setClientId($clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * @return mixed
     */
    public function getRaisonSocial()
    {
        return $this->raisonSocial;
    }

    /**
     * @param mixed $raisonSocial
     */
    public function setRaisonSocial($raisonSocial): void
    {
        $this->raisonSocial = $raisonSocial;
    }

    /**
     * @return mixed
     */
    public function getRccm()
    {
        return $this->rccm;
    }

    /**
     * @param mixed $rccm
     */
    public function setRccm($rccm): void
    {
        $this->rccm = $rccm;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo): void
    {
        $this->logo = $logo;
    }

    /**
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @param mixed $tel
     */
    public function setTel($tel): void
    {
        $this->tel = $tel;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     */
    public function setFax($fax): void
    {
        $this->fax = $fax;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSiteWeb()
    {
        return $this->siteWeb;
    }

    /**
     * @param mixed $siteWeb
     */
    public function setSiteWeb($siteWeb): void
    {
        $this->siteWeb = $siteWeb;
    }

    /**
     * @return mixed
     */
    public function getCniPropietaire()
    {
        return $this->cniPropietaire;
    }

    /**
     * @param mixed $cniPropietaire
     */
    public function setCniPropietaire($cniPropietaire): void
    {
        $this->cniPropietaire = $cniPropietaire;
    }

    /**
     * @return mixed
     */
    public function getNomProprietaire()
    {
        return $this->nomProprietaire;
    }

    /**
     * @param mixed $nomProprietaire
     */
    public function setNomProprietaire($nomProprietaire): void
    {
        $this->nomProprietaire = $nomProprietaire;
    }

    /**
     * @return mixed
     */
    public function getPrenomProprietaire()
    {
        return $this->prenomProprietaire;
    }

    /**
     * @param mixed $prenomProprietaire
     */
    public function setPrenomProprietaire($prenomProprietaire): void
    {
        $this->prenomProprietaire = $prenomProprietaire;
    }

    /**
     * @return mixed
     */
    public function getSexeProprietaire()
    {
        return $this->SexeProprietaire;
    }

    /**
     * @param mixed $SexeProprietaire
     */
    public function setSexeProprietaire($SexeProprietaire): void
    {
        $this->SexeProprietaire = $SexeProprietaire;
    }

    /**
     * @return mixed
     */
    public function getTelProprietaire()
    {
        return $this->telProprietaire;
    }

    /**
     * @param mixed $telProprietaire
     */
    public function setTelProprietaire($telProprietaire): void
    {
        $this->telProprietaire = $telProprietaire;
    }

    /**
     * @return mixed
     */
    public function getEmailProprietaire()
    {
        return $this->emailProprietaire;
    }

    /**
     * @param mixed $emailProprietaire
     */
    public function setEmailProprietaire($emailProprietaire): void
    {
        $this->emailProprietaire = $emailProprietaire;
    }

    /**
     * @return mixed
     */
    public function getCreatedby()
    {
        return $this->createdby;
    }

    /**
     * @param mixed $createdby
     */
    public function setCreatedby($createdby): void
    {
        $this->createdby = $createdby;
    }

    /**
     * @return mixed
     */
    public function getCreatedon()
    {
        return $this->createdon;
    }

    /**
     * @param mixed $createdon
     */
    public function setCreatedon($createdon): void
    {
        $this->createdon = $createdon;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action): void
    {
        $this->action = $action;
    }

    /**
     * @return mixed
     */
    public function getDbName()
    {
        return $this->dbName;
    }

    /**
     * @param mixed $dbName
     */
    public function setDbName($dbName): void
    {
        $this->dbName = $dbName;
    }


}
