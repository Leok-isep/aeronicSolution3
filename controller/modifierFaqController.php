<?php session_start();
include 'redirectionSession.php';
include '../model/database.php';
include '../view/header.php';
include '../view/footer.php';
include '../model/requeteFaq.php';

if (isset($_POST['modifier'])) {
    extract($_POST);
    global $db;
    $numeroFaq=$_SESSION['modiffaq'];
    $sql = "UPDATE faq SET question = '$question', reponse='$reponse', partie='$partie' WHERE  idFaq = $numeroFaq";
    $reponse = $db->exec($sql);
    header("Location: menuFaqController.php");exit;
}

include '../view/modifierFaq.php';
?>