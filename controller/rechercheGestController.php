<?php session_start();
include 'redirectionSession.php';
include '../view/header.php';
include '../view/footer.php';
include '../model/database.php';

$doctor = $_SESSION['utilisateur'];
$nameDoctor = $_SESSION['name'];

if (isset($_POST['bouttonRechercher'])) {
    extract($_POST);
    $_SESSION['recherche'] = $_POST['search'];
}

if (isset($_POST['submit'])) {
    if (isset($_SESSION['pilote'])) {
        unset($_SESSION['pilote']);
    }
    extract($_POST);
    $_SESSION['pilote'] = $_POST['code'];
    header("Location:historiqueTestController.php");exit;
} 

include '../view/rechercheGest.php';
?>