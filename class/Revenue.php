<?php

include 'messageError.php';

class Revenue extends messageError
{

    private $id;
    private $revenueId;
    private $commandeId;
    private $dateCommande;
    private $dateHeureRecup;
    private $lieuRecup;
    private $dateHeureLivraison;
    private $lieuLivraison;
    private $montantLivraison;
    private $compagnieId;
    private $nomCompagnie;
    private $percentCompagnie;
    private $createdBy;
    private $status;
    private $createdOn;
    private $action;
    private $periode;
    private $factureId;
    private $clientId;
    private $sMontant;
    private $tvaMontant;
    private $totalMontant;

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
    public function getRevenueId()
    {
        return $this->revenueId;
    }

    /**
     * @param mixed $revenueId
     */
    public function setRevenueId($revenueId)
    {
        $this->revenueId = $revenueId;
    }

    /**
     * @return mixed
     */
    public function getCommandeId()
    {
        return $this->commandeId;
    }

    /**
     * @param mixed $commandeId
     */
    public function setCommandeId($commandeId)
    {
        $this->commandeId = $commandeId;
    }

    /**
     * @return mixed
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * @param mixed $dateCommande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;
    }

    /**
     * @return mixed
     */
    public function getDateHeureRecup()
    {
        return $this->dateHeureRecup;
    }

    /**
     * @param mixed $dateHeureRecup
     */
    public function setDateHeureRecup($dateHeureRecup)
    {
        $this->dateHeureRecup = $dateHeureRecup;
    }

    /**
     * @return mixed
     */
    public function getLieuRecup()
    {
        return $this->lieuRecup;
    }

    /**
     * @param mixed $lieuRecup
     */
    public function setLieuRecup($lieuRecup)
    {
        $this->lieuRecup = $lieuRecup;
    }

    /**
     * @return mixed
     */
    public function getDateHeureLivraison()
    {
        return $this->dateHeureLivraison;
    }

    /**
     * @param mixed $dateHeureLivraison
     */
    public function setDateHeureLivraison($dateHeureLivraison)
    {
        $this->dateHeureLivraison = $dateHeureLivraison;
    }

    /**
     * @return mixed
     */
    public function getLieuLivraison()
    {
        return $this->lieuLivraison;
    }

    /**
     * @param mixed $lieuLivraison
     */
    public function setLieuLivraison($lieuLivraison)
    {
        $this->lieuLivraison = $lieuLivraison;
    }

    /**
     * @return mixed
     */
    public function getMontantLivraison()
    {
        return $this->montantLivraison;
    }

    /**
     * @param mixed $montantLivraison
     */
    public function setMontantLivraison($montantLivraison)
    {
        $this->montantLivraison = $montantLivraison;
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
    public function setCompagnieId($compagnieId)
    {
        $this->compagnieId = $compagnieId;
    }

    /**
     * @return mixed
     */
    public function getNomCompagnie()
    {
        return $this->nomCompagnie;
    }

    /**
     * @param mixed $nomCompagnie
     */
    public function setNomCompagnie($nomCompagnie)
    {
        $this->nomCompagnie = $nomCompagnie;
    }

    /**
     * @return mixed
     */
    public function getPercentCompagnie()
    {
        return $this->percentCompagnie;
    }

    /**
     * @param mixed $percentCompagnie
     */
    public function setPercentCompagnie($percentCompagnie)
    {
        $this->percentCompagnie = $percentCompagnie;
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

    /**
     * @return mixed
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * @param mixed $periode
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;
    }

    /**
     * @return mixed
     */
    public function getFactureId()
    {
        return $this->factureId;
    }

    /**
     * @param mixed $factureId
     */
    public function setFactureId($factureId): void
    {
        $this->factureId = $factureId;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param mixed $clientId
     */
    public function setClientId($clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * @return mixed
     */
    public function getSMontant()
    {
        return $this->sMontant;
    }

    /**
     * @param mixed $sMontant
     */
    public function setSMontant($sMontant): void
    {
        $this->sMontant = $sMontant;
    }

    /**
     * @return mixed
     */
    public function getTvaMontant()
    {
        return $this->tvaMontant;
    }

    /**
     * @param mixed $tvaMontant
     */
    public function setTvaMontant($tvaMontant): void
    {
        $this->tvaMontant = $tvaMontant;
    }

    /**
     * @return mixed
     */
    public function getTotalMontant()
    {
        return $this->totalMontant;
    }

    /**
     * @param mixed $totalMontant
     */
    public function setTotalMontant($totalMontant): void
    {
        $this->totalMontant = $totalMontant;
    }
}
