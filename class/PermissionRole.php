<?php

class PermissionRole
{private $permissionRoleId;
private $fonctionnaliteId;
private $profilId;
private $createdBy;
private $createdOn;
private $action;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getPermissionRoleId()
    {
        return $this->permissionRoleId;
    }

    /**
     * @param mixed $permissionRoleId
     */
    public function setPermissionRoleId($permissionRoleId): void
    {
        $this->permissionRoleId = $permissionRoleId;
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
    public function getProfilId()
    {
        return $this->profilId;
    }

    /**
     * @param mixed $profilId
     */
    public function setProfilId($profilId): void
    {
        $this->profilId = $profilId;
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