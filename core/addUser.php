<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 12/03/2019
 * Time: 13:52
 */


require_once '../class/Manager/UserManager.php';
require_once '../class/Entity/User.php';
require_once '../class/Database/Database.php';
$connexion = Database::connect();
// Création d'un admin manager
$userManager = new UserManager($connexion);

echo "wesh alors";

if(!isset($_POST['prenom']) && !isset($_POST['prenom']) && !isset($_POST['email']) && !isset($_POST['password']) && !isset($_POST['DDN']))
    die('Paramètres manqyants');


$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);
$DDN = htmlspecialchars($_POST['DDN']);
$user = new User();
$user->setNom($nom);
$user->setLogin($email);
$user->setPassword($password);
$user->setDdn($DDN);
$user->setPrenom($prenom);
//$userManager->addUser($user);
echo '<script>  location.reload();</script>';

