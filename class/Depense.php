<?php

include 'messageError.php';

class Depense extends messageError
{
private $depenseId;
private $libelle;
private $montant;
private $utilisateurId;
private $categorieDepenseId;
private $createdBy;
private $action;


    public function __construct()
    {

    }
    /**
     * @return mixed
     */
    public function getDepenseId()
    {
        return $this->depenseId;
    }

    /**
     * @param mixed $depenseId
     * @return Depense
     */
    public function setDepenseId($depenseId)
    {
        $this->depenseId = $depenseId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     * @return Depense
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param mixed $montant
     * @return Depense
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUtilisateurId()
    {
        return $this->utilisateurId;
    }

    /**
     * @param mixed $utilisateurId
     * @return Depense
     */
    public function setUtilisateurId($utilisateurId)
    {
        $this->utilisateurId = $utilisateurId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategorieDepenseId()
    {
        return $this->categorieDepenseId;
    }

    /**
     * @param mixed $categorieDepenseId
     * @return Depense
     */
    public function setCategorieDepenseId($categorieDepenseId)
    {
        $this->categorieDepenseId = $categorieDepenseId;
        return $this;
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
     * @return Depense
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
        return $this;
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
     * @return Depense
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }


}

