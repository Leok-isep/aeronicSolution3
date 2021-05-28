<?php session_start();

include '../View/base/header.php';
include '../Model/database.php';
include '../Model/requetePilote.php';
include '../View/base/footer.php';

if (isset($_POST['submit'])) {
    if (isset($_SESSION['testPilote'])) {
        unset($_SESSION['testPilote']);
    }
    extract($_POST);

    $_SESSION['testPilote'] = $_POST['code'];

    header("location:testController.php");
} 





include '../View/base/historiqueTest.php';
?>




