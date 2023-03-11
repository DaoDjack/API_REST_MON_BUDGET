<?php

include 'messageError.php';

class Utilisateur extends messageError
{
private $utilisateurId;
private $nom;
private $prenom;
private $noDeTelephone;
private $createdBy;
private $action;

public function __construct()
  {
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getNoDeTelephone()
    {
        return $this->noDeTelephone;
    }

    /**
     * @param mixed $noDeTelephone
     */
    public function setNoDeTelephone($noDeTelephone): void
    {
        $this->noDeTelephone = $noDeTelephone;
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
