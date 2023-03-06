<?php

include 'messageError.php';
class Reglement extends messageError
{
    private $id;
    private $reglementId;
    private $factureId;
    private $montant;
    private $date;
    private $createdBy;
    private $createdOn;
    private $status;
    private $Action;

    public function __construct(){}

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
    public function getReglementId()
    {
        return $this->reglementId;
    }

    /**
     * @param mixed $reglementId
     */
    public function setReglementId($reglementId): void
    {
        $this->reglementId = $reglementId;
    }

    /**
     * @return mixed
     */
    public function getFactureId()
    {
        return $this->factureId;
    }

    /**
     * @param mixed $factureId
     */
    public function setFactureId($factureId): void
    {
        $this->factureId = $factureId;
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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
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
        return $this->Action;
    }

    /**
     * @param mixed $Action
     */
    public function setAction($Action): void
    {
        $this->Action = $Action;
    }
}
