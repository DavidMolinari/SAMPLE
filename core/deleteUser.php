<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 12/03/2019
 * Time: 13:21
 */

if(!isset($_POST['id']))
    die('Paramètres manquants');

$id = htmlspecialchars($_POST['id']);
require_once '../class/Manager/UserManager.php';
require_once '../class/Entity/User.php';
require_once '../class/Database/Database.php';

$connexion = Database::connect();
$userManager = new UserManager($connexion);
$userManager->deleteUser($id);