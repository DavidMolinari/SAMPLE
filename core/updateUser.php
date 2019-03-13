<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 12/03/2019
 * Time: 13:21
 */

if(!isset($_POST['id']) && !isset($_POST['prenom']) && !isset($_POST['nom']) && !isset($_POST['email']))
    die('Paramètres manquants');

$id = htmlspecialchars($_POST['id']);
$prenom = htmlspecialchars($_POST['prenom']);
$nom = htmlspecialchars($_POST['nom']);
$email = htmlspecialchars($_POST['email']);

require_once '../class/Manager/UserManager.php';
require_once '../class/Entity/User.php';
require_once '../class/Database/Database.php';

$connexion = Database::connect();
$userManager = new UserManager($connexion);
$userManager->updateUserByIdSal($id, $prenom,$nom, $email);