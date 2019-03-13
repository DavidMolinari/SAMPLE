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
        $nom = $user->getNom();
        $prenom = $user->getPrenom();
        $email = $user->getEmail();
        $ddn = $user->getDdn();
        $pwd = $user->getPassword();
        $query = "
        INSERT INTO USER (prenom, nom, email, password, ddn)
        values(
        '".$prenom."',
        '".$nom."',
        '".$email."',
        '".$pwd."',
        '".$ddn."')";
        $sth = $this->conn->prepare($query);
        $sth->execute();
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

    /**
     * @param $id
     * @param $prenom
     * @param $nom
     * @param $email
     */
    public function updateUserByIdSal($id, $prenom, $nom, $email){
        $query = "
        UPDATE USER
         SET 
         prenom = '".htmlspecialchars($prenom)."',
         nom = '".htmlspecialchars($nom)."',
         email = '".htmlspecialchars($email)."'
         WHERE id = ".htmlspecialchars($id)."
        ";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }


}