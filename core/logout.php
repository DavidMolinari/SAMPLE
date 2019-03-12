<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 12/03/2019
 * Time: 12:34
 */
session_start();
session_destroy();
echo '<script type="text/javascript"> window.open("../index.php","_self");</script>';
