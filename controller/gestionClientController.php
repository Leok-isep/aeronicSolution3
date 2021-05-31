<?php session_start();
include 'redirectionSession.php';
include '../view/header.php';
include '../view/footer.php';
include '../model/database.php';

if (isset($_POST['gestionClient'])) {
    if (isset($_SESSION['modifclient'])) {
        unset($_SESSION['modifclient']);
    }
    extract($_POST);

    $_SESSION['modifclient'] = $_POST['code'];

    if ($_POST['gestionClient'] == 'modifier') {
        header("Location: modifClientController.php");exit;
    } else if ($_POST['gestionClient'] == 'bannir') {
        header("Location: bannirClientController.php");exit;
    } else if ($_POST['gestionClient'] == 'supprimer') {
        header("Location: supprimerClientController.php");exit;
    }
} include '../view/gestionClient.php';
?>