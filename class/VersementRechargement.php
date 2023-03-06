<?php

include 'messageError.php';
class VersementRechargement extends messageError
{
    private $id;
    private $versementRechargementId;
    private $rechargementId;
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
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getVersementRechargementId()
    {
        return $this->versementRechargementId;
    }

    /**
     * @param mixed $versementRechargementId
     */
    public function setVersementRechargementId($versementRechargementId)
    {
        $this->versementRechargementId = $versementRechargementId;
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
    public function setRechargementId($rechargementId)
    {
        $this->rechargementId = $rechargementId;
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
    public function setMontant($montant)
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
    public function setDate($date)
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
    public function setCreatedBy($createdBy)
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
    public function setCreatedOn($createdOn)
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
    public function setStatus($status)
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
    public function setAction($Action)
    {
        $this->Action = $Action;
    }


}