<?php

include 'messageError.php';
class Compagnie extends messageError
{
private $id;
private $compagnieId;
private $raisonSocial;
private $rccm;
private $logo;
private $tel;
private $fax;
private $email;
private $website;
private $cniProprietaire;
private $nomProprietaire;
private $prenomProprietaire;
private $sexeProprietaire;
private $communeid;
private $telProprietaire;
private $emailProprietaire;
private $creecmd;
private $createdOn;
private $createdBy;
private $status;
private $action;

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
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCompagnieId()
    {
        return $this->compagnieId;
    }

    /**
     * @param mixed $compagnieId
     */
    public function setCompagnieId($compagnieId)
    {
        $this->compagnieId = $compagnieId;
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
    public function setRaisonSocial($raisonSocial)
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
    public function setRccm($rccm)
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
    public function setLogo($logo)
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
    public function setTel($tel)
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
    public function setFax($fax)
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
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param mixed $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return mixed
     */
    public function getCniProprietaire()
    {
        return $this->cniProprietaire;
    }

    /**
     * @param mixed $cniProprietaire
     */
    public function setCniProprietaire($cniProprietaire)
    {
        $this->cniProprietaire = $cniProprietaire;
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
    public function setNomProprietaire($nomProprietaire)
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
    public function setPrenomProprietaire($prenomProprietaire)
    {
        $this->prenomProprietaire = $prenomProprietaire;
    }

    /**
     * @return mixed
     */
    public function getSexeProprietaire()
    {
        return $this->sexeProprietaire;
    }

    /**
     * @param mixed $sexeProprietaire
     */
    public function setSexeProprietaire($sexeProprietaire)
    {
        $this->sexeProprietaire = $sexeProprietaire;
    }

    /**
     * @return mixed
     */
    public function getCommuneid()
    {
        return $this->communeid;
    }

    /**
     * @param mixed $communeid
     */
    public function setCommuneid($communeid): void
    {
        $this->communeid = $communeid;
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
    public function setTelProprietaire($telProprietaire)
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
    public function setEmailProprietaire($emailProprietaire)
    {
        $this->emailProprietaire = $emailProprietaire;
    }

    /**
     * @return mixed
     */
    public function getCreecmd()
    {
        return $this->creecmd;
    }

    /**
     * @param mixed $creecmd
     */
    public function setCreecmd($creecmd)
    {
        $this->creecmd = $creecmd;
    }

    /**
     * @return mixed
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * @param mixed $createdOn
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param mixed $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
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
    public function setStatus($status)
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
    public function setAction($action)
    {
        $this->action = $action;
    }
}
