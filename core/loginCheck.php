<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 12/03/2019
 * Time: 12:06
 */
session_start();

require_once '../class/Entity/User.php';
require_once '../class/Manager/AdminManager.php';
require_once '../class/Entity/Admin.php';
require_once '../class/Database/Database.php';

if(!isset($_POST['email']) && !isset($_POST['password']))
    die('Paramètres manquants');
$login = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
// Création d'une connexion avec des données en brut ( flemme )
$connexion = Database::connect();
// Création d'un admin manager
$adminManager = new AdminManager($connexion);
// Pas obligé mais création d'un object admin
$admin = new Admin();
$admin->setPassword($password);
$admin->setLogin($login);
// Verification du login
if($adminManager->verifyLogin($admin) == true ) {
    $_SESSION['admin'] = $admin;
    // Affichage de la page admin;
    echo '<script type="text/javascript"> window.open("../index.php","_self");</script>';
} else {
    echo "<h2 style='color: red;'> IDENTIFIANTS NON VALIDES !</h2>";
}
