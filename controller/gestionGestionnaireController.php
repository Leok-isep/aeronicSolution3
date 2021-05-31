<?php session_start();
include 'redirectionSession.php';
include '../view/header.php';
include '../view/footer.php';
include '../model/database.php';

if (isset($_POST['gestionGestionnaire'])) {
    if (isset($_SESSION['modifGestionnaire'])) {
        unset($_SESSION['modifGestionnaire']);
    }
    extract($_POST);

    $_SESSION['modifGestionnaire'] = $_POST['code'];

    if ($_POST['gestionGestionnaire'] == 'modifier') {
        header("location: modifGestionnaireController.php");exit;
    } else if ($_POST['gestionGestionnaire'] == 'bannir') {
        header("location: bannirGestionnaireController.php");exit;
    } else if ($_POST['gestionGestionnaire'] == 'supprimer') {
        header("location: supprimerGestionnaireController.php");exit;
    }
} include '../view/gestionGestionnaire.php';
?>