<?php session_start();
include '../view/header.php';
include '../view/footer.php';
include '../model/database.php';
include '../model/requeteProfil.php';

if(isset($_POST['log'])) {
    header('Location: modifierMdpController.php');exit;
}

if(isset($_POST['logprofil'])) {
    header('Location: modifierProfilController.php');exit;
}

include('../view/profil.php');
?>