<?php session_start();
include "../view/header.php";
include "../view/footer.php";
include '../model/database.php';

if (isset($_POST['gestionFaq'])) {
    if (isset($_SESSION['modiffaq'])) {
        unset($_SESSION['modiffaq']);
    }
    extract($_POST);
    $_SESSION['modiffaq'] = $_POST['codeFaq'];
    if ($_POST['gestionFaq'] == 'modifier') {
        header("Location: modifierFaqController.php");
    }  else if ($_POST['gestionFaq'] == 'supprimer') {
        header("Location: supprimerFaqController.php");
    }
}
include '../view/menuFaq.php';
?>