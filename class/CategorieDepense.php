<?php

include 'messageError.php';

class CategorieDepense extends messageError
{
    private $categorieDepenseId;
    private $libelle;
    private $description;
    private $createdBy;
    private $action;

    public function __construct()
    {
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
     */
    public function setCategorieDepenseId($categorieDepenseId): void
    {
        $this->categorieDepenseId = $categorieDepenseId;
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
     */
    public function setLibelle($libelle): void
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
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