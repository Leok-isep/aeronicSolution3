<?php session_start();
include '../View/base/header.php';
include '../View/base/footer.php';
include '../Model/database.php';

if (isset($_POST['gestionGestionnaire'])) {
    if (isset($_SESSION['modifGestionnaire'])) {
        unset($_SESSION['modifGestionnaire']);
    }
    extract($_POST);

    $_SESSION['modifGestionnaire'] = $_POST['code'];

    if ($_POST['gestionGestionnaire'] == 'modifier') {
        header("location: modifGestionnaireController.php");
    } else if ($_POST['gestionGestionnaire'] == 'bannir') {
        header("location: bannirGestionnaireController.php");
    } else if ($_POST['gestionGestionnaire'] == 'supprimer') {
        header("location: supprimerGestionnaireController.php");
    }
} include '../View/base/gestionGestionnaire.php';
?>