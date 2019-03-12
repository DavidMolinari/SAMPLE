<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 12/03/2019
 * Time: 13:04
 */


require_once './class/Manager/UserManager.php';
require_once './class/Entity/User.php';
require_once './class/Database/Database.php';
$connexion = Database::connect();
// Création d'un admin manager
$userManager = new UserManager($connexion);
foreach ($userManager->getUsers() as $user){
    echo "
        <tr>
            <td>$user->ID</td>
            <td>$user->PRENOM</td>
            <td>$user->NOM</td>
            <td>$user->EMAIL</td>
            <td>$user->DDN</td>
            <td>$user->LAST_CONNEXION</td>
            <td>
                <button class='btn btn-success'>EDITER</button>
                <button class='remove btn btn-danger' data-id='".$user->ID."'>SUPPRIMER</button>
            </td>
        </tr>
    ";
}

