<?php

include 'messageError.php';
class Access extends messageError
{
    private $id;
    private $accessId;
    private $username;
    private $password;
    private $expiredOn;
    private $userId;
    private $compagnyKey;
    private $provenance;
    private $createdOn;
    private $createdBy;
    private $status;
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
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAccessId()
    {
        return $this->accessId;
    }

    /**
     * @param mixed $accessId
     */
    public function setAccessId($accessId)
    {
        $this->accessId = $accessId;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getCompagnyKey()
    {
        return $this->compagnyKey;
    }

    /**
     * @param mixed $username
     */
    public function setCompagnyKey($compagnyKey)
    {
        $this->compagnyKey = $compagnyKey;
    }

    /**
     * @return mixed
     */
    public function getProvenance()
    {
        return $this->provenance;
    }

    /**
     * @param mixed $provenance
     */
    public function setProvenance($provenance)
    {
        $this->provenance = $provenance;
    }
    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getExpiredOn()
    {
        return $this->expiredOn;
    }

    /**
     * @param mixed $expiredOn
     */
    public function setExpiredOn($expiredOn)
    {
        $this->expiredOn = $expiredOn;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }
}
