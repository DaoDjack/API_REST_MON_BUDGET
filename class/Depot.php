<?php
include 'messageError.php';

class Depot extends messageError
{
private $depotId;
private $montant;
private $dateDepot;
private $objectifsId;
private $createdBy;
private $action;

    /**
     */
    public function __construct()
    {  }

    /**
     * @return mixed
     */
    public function getDepotId()
    {
        return $this->depotId;
    }

    /**
     * @param mixed $depotId
     * @return Depot
     */
    public function setDepotId($depotId)
    {
        $this->depotId = $depotId;
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
     * @return Depot
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateDepot()
    {
        return $this->dateDepot;
    }

    /**
     * @param mixed $dateDepot
     * @return Depot
     */
    public function setDateDepot($dateDepot)
    {
        $this->dateDepot = $dateDepot;
        return $this;
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
     * @return Depot
     */
    public function setObjectifsId($objectifsId)
    {
        $this->objectifsId = $objectifsId;
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
     * @return Depot
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
     * @return Depot
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

 
}
