<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 12/03/2019
 * Time: 10:42
 */

class UserManager
{

    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    /**
     *
     */
    public function addUser(User $user) {
        $query = "INSERT INTO `user`(`prenom`, `nom`, `email`, `password`, `ddn`, `last_connexion`) 
                    VALUES ('
                     ".$user->getPrenom()."
                     ', '
                     ".$user->getNom()."
                     ', '
                     ".$user->getEmail()."
                     ', '
                     ".$user->getPassword()."
                     ', '
                     ".$user->getDdn()."
                     ', '
                     ".$user->getLastConnexion()."
                      ');";

        $req = $this->conn->prepare($query);
        print_r($req);
        $req->execute();
    }
    public function getUsers() {
        $sth = $this->conn->prepare("SELECT * from USER;");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;

    }

    public function deleteUser($id){
        $query = "DELETE FROM USER WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    /**
     * @param $id
     * @param User $user
     */
    public function updateUserById($id, User $user) {
        $nom = $user->getNom();
        // Requte à compléter
        $query = "UPDATE USER set nom = '".$nom."' where ID = " . $id . ";";
    }


}