<?php
include 'bdd.php';
class moUtilisateurAdmin extends bdd
{
    public function crudUtilisateurAdmin(UtilisateurAdmin $utilisateurAdmin)
    {
        //print_r($utilisateurAdmin);
        $this->Query = 'CALL ps_AdminUtilisateur(
                                        :utilisateurAdminId,
                                        :nom,
                                        :prenom,
                                        :contact,
                                        :email,
                                        :role,
                                        :createdBy,
                                        :action )';
        try {

            $this->open();
            $this->beginTrans();

            $PDOprepare = $this->prepareQuery();

            $PDOprepare->execute(array(
                    'utilisateurAdminId' => $utilisateurAdmin->getUtilisateurAdminId(),
                    'nom'   => $utilisateurAdmin->getNom(),
                    'prenom'   => $utilisateurAdmin->getPrenom(),
                    'contact'   => $utilisateurAdmin->getContact(),
                    'email'   => $utilisateurAdmin->getEmail(),
                    'role'   => $utilisateurAdmin->getRole(),
                    'createdBy'   => $utilisateurAdmin->getCreatedBy(),
                    'action'    => $utilisateurAdmin->getAction()
                )
            );

            switch ($utilisateurAdmin->getAction()) {
                case $this::$SelectAll :
                    $this->Response = $PDOprepare->fetchAll();
                    break;
                case $this::$SelectById :
                    $this->Response = $PDOprepare->fetch();
                    break;
                case $this::$DeleteById:
                case $this::$Insert:
                case $this::$UpdateById:
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

            return $this->ResponseError;
        }
    }
}
