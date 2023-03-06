<?php

class AvoirClient
{
    private $id;
    private $avoirClientId;
    private $compagnieId;
    private $montant;
    private $createdBy;
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
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAvoirClientId()
    {
        return $this->avoirClientId;
    }

    /**
     * @param mixed $avoirClientId
     */
    public function setAvoirClientId($avoirClientId): void
    {
        $this->avoirClientId = $avoirClientId;
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


}
