<?php session_start(); ?>
<!doctype html>
<html lang="fr">
<?php include_once './pages/head.html' ?>
<body>

<?php
if(isset($_SESSION['admin'])){
    include_once './pages/navbar.php';

    echo "<div class='container'>";
    echo "<div class='row'>";

    include_once './pages/user_view.php';
    echo "</div>";
    echo "</div>";

}else {
    include_once './pages/admin_login_view.php';
}


?>
</body>
</html>