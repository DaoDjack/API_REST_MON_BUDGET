<?php
include 'bdd.php';
class moUtilisateur extends bdd
{
    public function crudUtilisateur(Utilisateur $utilisateur)
    {
        $this->Query = 'CALL ps_Utilisateur(
                                        :utilisateurId,
                                        :nom,
                                        :prenom,
                                        :noDeTelephone,
                                        :createdBy,
                                        :action )';
        try {

            $this->open();
            $this->beginTrans();

            $PDOprepare = $this->prepareQuery();

            $PDOprepare->execute(array(
                    'utilisateurId' => $utilisateur->getUtilisateurId(),
                    'nom' => $utilisateur->getNom(),
                    'prenom' => $utilisateur->getPrenom(),
                    'contact' => $utilisateur->getContact(),
                    'createdBy' => $utilisateur->getCreatedBy(),
                    'action' => $utilisateur->getAction()
                )
            );

            switch ($utilisateur->getAction()) {
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
