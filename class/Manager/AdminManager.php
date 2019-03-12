<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 12/03/2019
 * Time: 10:42
 */

class AdminManager
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    /**
     * @param Admin $admin
     * @return bool
     */
function verifyLogin(Admin $admin)
{
    $login = $admin->getLogin();
    $password = $admin->getPassword();
    $query = "SELECT ID FROM ADMIN WHERE LOGIN = '" . $login . "' AND PASSWORD = '" . $password . "'";
    $dbh = $this->conn->prepare($query);

    $dbh->execute();
    $row = $dbh->fetchAll();
    if ($row) return true;
    return false;
}
}