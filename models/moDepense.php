<?php
include 'bdd.php';
class moDepense extends bdd
{
    public function crudDepense (Depense $Depense)
    {
        $this->Query = 'CALL ps_Depense(
                                        :depenseId,
                                        :libelle,
                                        :montant,
                                        :utilisateurId,
                                        :categorieDepenseId,
                                        :createdBy,
                                        :action )';
        try {

            $this->open();
            $this->beginTrans();

            $PDOprepare = $this->prepareQuery();

            $PDOprepare->execute(array(
                    'depenseId' => $Depense->getDepenseId(),
                    'libelle' => $Depense->getlibelle(),
                    'montant' =>$Depense->getmontant(),
                    'utilisateurId' =>$Depense->getutilisateurId(),
                    'categorieDepenseId' =>$Depense->getCategorieDepenseId(),
                    'createdBy' => $Depense->getCreatedBy(),
                    'action' => $Depense->getAction()
                )
            );

            switch ($Depense->getAction()) {
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