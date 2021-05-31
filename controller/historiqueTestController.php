<?php session_start();
include 'redirectionSession.php';
include '../view/header.php';
include '../model/database.php';
include '../model/requeteProfil.php';
include '../view/footer.php';

if ($_SESSION['utilisateur']=='gestionnaire') {
    include '../model/requetePilote.php';
}

if (isset($_POST['submit'])) {
    if (isset($_SESSION['testPilote'])) {
        unset($_SESSION['testPilote']);
    }
    extract($_POST);
    $_SESSION['testPilote'] = $_POST['code'];
    header("location:testController.php");exit;
}

include '../view/historiqueTest.php';
?>