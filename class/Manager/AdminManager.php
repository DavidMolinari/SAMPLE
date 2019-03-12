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

    
    function verifyLogin(Admin $admin){
        //TODO
        $query = "";
        return true;
    }

}