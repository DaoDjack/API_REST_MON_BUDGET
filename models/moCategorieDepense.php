<?php
include 'bdd.php';
class moCategorieDepense extends bdd
{
    public function crudCategorieDepense(CategorieDepense $CategorieDepense)
    {
        $this->Query = 'CALL ps_categorie_depense(
                                        :CategorieDepenseId,
                                        :libelle,
                                        :description,
                                        :createdBy,
                                        :action )';
        try {

            $this->open();
            $this->beginTrans();

            $PDOprepare = $this->prepareQuery();

            $PDOprepare->execute(array(
                    'CategorieDepenseId' => $CategorieDepense->getCategorieDepenseId(),
                    'libelle' => $CategorieDepense->getLibelle(),
                    'description' =>$CategorieDepense->getDescription(),
                    'createdBy' => $CategorieDepense->getCreatedBy(),
                    'action' => $CategorieDepense->getAction()
                )
            );

            switch ($CategorieDepense->getAction()) {
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
