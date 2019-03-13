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
            <td class='user_id'>".$user->ID."</td>
            <td><input type='text' class='user_prenom' value='" .$user->PRENOM."' style='width:100px;'></td>
            <td><input type='text' class='user_nom' value='" .$user->NOM."' style='width:100px;'></td>
            <td><input type='text' class='user_email' value='" .$user->EMAIL."'></td>
            <td><input type='date' value='" . date ($user->DDN) ."'></td>
            <td>".$user->LAST_CONNEXION."</td>
            <td>
                <button class='edit btn btn-success'>EDITER</button>
                <button class='remove btn btn-danger' data-id='".$user->ID."'>SUPPRIMER</button>
            </td>
        </tr>
    ";
}

