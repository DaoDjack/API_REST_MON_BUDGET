<?php

include "messageError.php";
class Rechargement extends messageError
{
    private $id;
    private $rechargementId;
    private $compagnieId;
    private $dateHeure;
    private $montant;
    private $codeRechargement;
    private $createdBy;
    private $createdOn;
    private $statut;
    private $action;
    private $periode;
    private $debut;
    private $fin;

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
    public function getRechargementId()
    {
        return $this->rechargementId;
    }

    /**
     * @param mixed $rechargementId
     */
    public function setRechargementId($rechargementId): void
    {
        $this->rechargementId = $rechargementId;
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
    public function setCompagnieId($compagnieId): void
    {
        $this->compagnieId = $compagnieId;
    }

    /**
     * @return mixed
     */
    public function getDateHeure()
    {
        return $this->dateHeure;
    }

    /**
     * @param mixed $dateHeure
     */
    public function setDateHeure($dateHeure): void
    {
        $this->dateHeure = $dateHeure;
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
     */
    public function setMontant($montant): void
    {
        $this->montant = $montant;
    }

    /**
     * @return mixed
     */
    public function getCodeRechargement()
    {
        return $this->codeRechargement;
    }

    /**
     * @param mixed $codeRechargement
     */
    public function setCodeRechargement($codeRechargement): void
    {
        $this->codeRechargement = $codeRechargement;
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
    public function setCreatedBy($createdBy): void
    {
        $this->createdBy = $createdBy;
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
    public function setCreatedOn($createdOn): void
    {
        $this->createdOn = $createdOn;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut): void
    {
        $this->statut = $statut;
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
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * @param mixed $periode
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;
    }

    /**
     * @return mixed
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * @param mixed $debut
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;
    }

    /**
     * @return mixed
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * @param mixed $fin
     */
    public function setFin($fin)
    {
        $this->fin = $fin;
    }




}
