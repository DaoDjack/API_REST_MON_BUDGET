<?php

class FonctionnaliteModule
{
private $id;
private $status;
private $fontionnalite;
private $fonctionnaliteId;
private $fonctionnalite;
private $description;
private $moduleAdminId;
private $CreatedBy;
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
    public function getFontionnalite()
    {
        return $this->fontionnalite;
    }

    /**
     * @param mixed $fontionnalite
     */
    public function setFontionnalite($fontionnalite): void
    {
        $this->fontionnalite = $fontionnalite;
    }

    /**
     * @return mixed
     */
    public function getFonctionnaliteId()
    {
        return $this->fonctionnaliteId;
    }

    /**
     * @param mixed $fonctionnaliteId
     */
    public function setFonctionnaliteId($fonctionnaliteId): void
    {
        $this->fonctionnaliteId = $fonctionnaliteId;
    }

    /**
     * @return mixed
     */
    public function getFonctionnalite()
    {
        return $this->fonctionnalite;
    }

    /**
     * @param mixed $fonctionnalite
     */
    public function setFonctionnalite($fonctionnalite): void
    {
        $this->fonctionnalite = $fonctionnalite;
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
    public function getModuleAdminId()
    {
        return $this->moduleAdminId;
    }

    /**
     * @param mixed $moduleAdminId
     */
    public function setModuleAdminId($moduleAdminId): void
    {
        $this->moduleAdminId = $moduleAdminId;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->CreatedBy;
    }

    /**
     * @param mixed $CreatedBy
     */
    public function setCreatedBy($CreatedBy): void
    {
        $this->CreatedBy = $CreatedBy;
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