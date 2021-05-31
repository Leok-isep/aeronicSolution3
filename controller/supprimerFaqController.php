<?php session_start();
include 'redirectionSession.php';
include '../model/database.php';
include '../view/header.php';
include '../view/footer.php';
include '../model/requeteFaq.php';

if (isset($_POST['oui'])) {
    $numeroQuestion=$_SESSION['modiffaq'];
    $sql = "DELETE from faq WHERE idFaq = '$numeroQuestion'";
    $reponse = $db->exec($sql);
    header("Location: menuFaqController.php");exit;
}
else if (isset($_POST['non'])) {
    header("Location: menuFaqController.php");exit;
}

include '../view/supprimerFaq.php';
?>