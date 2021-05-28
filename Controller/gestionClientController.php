<?php session_start();
include '../View/base/header.php';
include '../View/base/footer.php';
include '../Model/database.php';

if (isset($_POST['gestionClient'])) {
    if (isset($_SESSION['modifclient'])) {
        unset($_SESSION['modifclient']);
    }
    extract($_POST);

    $_SESSION['modifclient'] = $_POST['code'];

    if ($_POST['gestionClient'] == 'modifier') {
        header("location: modifClientController.php");
    } else if ($_POST['gestionClient'] == 'bannir') {
        header("location: bannirClientController.php");
    } else if ($_POST['gestionClient'] == 'supprimer') {
        header("location: supprimerClientController.php");
    }
} include '../View/base/gestionClient.php';
?>