<?php session_start();
include '../View/base/header.php';
include '../View/base/footer.php';
include '../Model/database.php';
include '../Model/requeteProfil.php';



if(isset($_POST['log'])) {
    header('Location: modifierMdpController.php');
}

if(isset($_POST['logprofil'])) {
    header('Location: modifierProfilController.php');
}

include('../View/base/profil.php');
?>