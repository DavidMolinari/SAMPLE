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
    public function addUser($prenom, $nom, $email, $ddn) {
        $query = '';

    }
    public function getUsers() {
        $sth = $this->getConn()->prepare("SELECT * from USER;");
        $sth->execute();
        $result = $sth->fetchAll();
        return $result;

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