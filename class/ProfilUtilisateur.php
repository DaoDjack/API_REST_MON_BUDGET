<?php

class ProfilUtilisateur
{
private $id;
private $userProfilId;
private $utilisateurId;
private $profilId;
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
    public function getUserProfilId()
    {
        return $this->userProfilId;
    }

    /**
     * @param mixed $userProfilId
     */
    public function setUserProfilId($userProfilId): void
    {
        $this->userProfilId = $userProfilId;
    }

    /**
     * @return mixed
     */
    public function getUtilisateurId()
    {
        return $this->utilisateurId;
    }

    /**
     * @param mixed $utilisateurId
     */
    public function setUtilisateurId($utilisateurId): void
    {
        $this->utilisateurId = $utilisateurId;
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