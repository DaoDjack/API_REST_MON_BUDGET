<?php

class SeuilConsommation
{
    private $id;
    private $seuilConsommationId;
    private $compagnieId;
    private $seuil;
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
    public function getSeuilConsommationId()
    {
        return $this->seuilConsommationId;
    }

    /**
     * @param mixed $seuilConsommationId
     */
    public function setSeuilConsommationId($seuilConsommationId): void
    {
        $this->seuilConsommationId = $seuilConsommationId;
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
    public function getSeuil()
    {
        return $this->seuil;
    }

    /**
     * @param mixed $seuil
     */
    public function setSeuil($seuil): void
    {
        $this->seuil = $seuil;
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
