<?php
include '../class/messageError.php';
class CategorieProduit extends messageError {

private $id;
private $categorieId;
private $libelle;
private $createdOn;
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
    public function getCategorieId()
    {
        return $this->categorieId;
    }

    /**
     * @param mixed $categorieId
     */
    public function setCategorieId($categorieId): void
    {
        $this->categorieId = $categorieId;
    }


     /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $tarif
     */
    public function setLibelle($libelle): void
    {
        $this->libelle = $libelle;
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
