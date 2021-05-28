<?php session_start();

include '../View/base/header.php';
include '../View/base/footer.php';
include '../Model/database.php';


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

    header("location:historiqueTestController.php");
} 
include '../View/base/rechercheGest.php';

?>