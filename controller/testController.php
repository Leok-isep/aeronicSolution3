<?php session_start();
include '../view/header.php';
include '../model/database.php';
include '../model/requeteProfil.php';
include '../model/requeteTest.php';
if ($_SESSION['utilisateur']=='gestionnaire') {
    include '../model/requetePilote.php';
}
include '../view/test.php';
include '../view/footer2.php';
?>