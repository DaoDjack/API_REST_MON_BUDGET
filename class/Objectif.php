<?php

include 'messageError.php';

class Objectif extends messageError
{

private $objectifsId;
private $libelle;
private $montant;
private $utilisateurId;
private $createdBy;
private $action;

    /**
     * @param $objectifsId
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getObjectifsId()
    {
        return $this->objectifsId;
    }

    /**
     * @param mixed $objectifsId
     * @return Objectif
     */
    public function setObjectifsId($objectifsId)
    {
        $this->objectifsId = $objectifsId;
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
     * @return Objectif
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
     * @return Objectif
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
     * @return Objectif
     */
    public function setUtilisateurId($utilisateurId)
    {
        $this->utilisateurId = $utilisateurId;
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
     * @return Objectif
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
     * @return Objectif
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }


}