<?php
include 'bdd.php';
class moObjectif extends bdd
{
    public function crudObjectif(objectif $objectif)
    {
        $this->Query = 'CALL ps_Objectif(
                                        :objectifsId,
                                        :libelle,
                                        :montant,
                                        :utilisateurId,
                                        :createdBy,
                                        :action )';
        try {

            $this->open();
            $this->beginTrans();

            $PDOprepare = $this->prepareQuery();

            $PDOprepare->execute(array(
                    'objectifsId' => $objectif->getObjectifsId(),
                    'libelle' =>  $objectif->getLibelle(),
                    'montant' => $objectif->getMontant(),
                    'utilisateurId' =>$objectif->getUtilisateurId(),
                    'createdBy' =>$objectif->getCreatedBy(),
                    'action' =>  $objectif->getAction()
                )
            );

            switch ( $objectif->getAction()) {
                case $this::$SelectAll :
                    $this->Response = $PDOprepare->fetchAll();
                    break;
                case $this::$SelectById :
                    $this->Response = $PDOprepare->fetch();
                    break;
                case $this::$Insert:
                case $this::$UpdateById:
                case $this::$DeleteById:
                    $this->Response = 1;
                    break;
                default:
                    $this->Response = 2;
                    break;
            }

            $PDOprepare->closecursor();

            $this->commitTrans();

            return $this->Response;
        } catch (PDOException $e) {
            $this->rollbackTrans();
            $Msg = $this->errorMsg($e);
            echo $Msg
            ;            return $this->ResponseError;
        }
    }
}