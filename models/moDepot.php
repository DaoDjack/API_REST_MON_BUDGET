<?php
include 'bdd.php';
class moDepot extends bdd
{
    public function crudDepot(Depot $depot)
    {
        $this->Query = 'CALL ps_Depot(
                                        :depotId,
                                        :montant,
                                        :dateDepot,
                                        :objectifId,
                                        :createdBy,
                                        :action )';
        try {

            $this->open();
            $this->beginTrans();

            $PDOprepare = $this->prepareQuery();

            $PDOprepare->execute(array(
                    'depotId' => $depot->getDepotId(),
                    'montant' => $depot->getMontant(),
                    'dateDepot' => $depot->getdateDepot(),
                    'objectifId' => $depot->getobjectifsId(),
                    'createdBy' => $depot->getCreatedBy(),
                    'action' => $depot->getAction()
                )
            );

            switch ($depot->getAction()) {
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
            echo $Msg;
            return $this->ResponseError;
        }
    }
}