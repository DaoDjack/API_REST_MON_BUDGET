<?php

include 'messageError.php';
class AccessUtilisateurAdmin extends messageError
{
    private $id;
    private $accessUtilisateurAdminId;
    private $userName;
    private $password;
    private $utilisateurAdminId;
    private $statut;
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
    public function getAccessUtilisateurAdminId()
    {
        return $this->accessUtilisateurAdminId;
    }

    /**
     * @param mixed $accessUtilisateurAdminId
     */
    public function setAccessUtilisateurAdminId($accessUtilisateurAdminId): void
    {
        $this->accessUtilisateurAdminId = $accessUtilisateurAdminId;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param mixed $userName
     */
    public function setUserName($userName): void
    {
        $this->userName = $userName;
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
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getUtilisateurAdminId()
    {
        return $this->utilisateurAdminId;
    }

    /**
     * @param mixed $utilisateurAdminId
     */
    public function setUtilisateurAdminId($utilisateurAdminId): void
    {
        $this->utilisateurAdminId = $utilisateurAdminId;
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut): void
    {
        $this->statut = $statut;
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
