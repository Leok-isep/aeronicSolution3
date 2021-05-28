<?php session_start();
include "../View/base/header.php";
include "../View/base/footer.php";
include '../Model/database.php';

if (isset($_POST['gestionFaq'])) {
    if (isset($_SESSION['modiffaq'])) {
        unset($_SESSION['modiffaq']);
    }
    extract($_POST);
    $_SESSION['modiffaq'] = $_POST['codeFaq'];
    if ($_POST['gestionFaq'] == 'modifier') {
        header("location: modifierFaqController.php");
    }  else if ($_POST['gestionFaq'] == 'supprimer') {
        header("location: supprimerFaqController.php");
    }
}
include '../View/base/menuFaq.php';
?>