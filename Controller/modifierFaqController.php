<?php session_start();
include '../Model/database.php';
include '../View/base/header.php';
include '../View/base/footer.php';
include '../Model/requeteFaq.php';


if (isset($_POST['modifier'])) {

    extract($_POST);
    global $db;
    $numeroFaq=$_SESSION['modiffaq'];


    $sql = "UPDATE faq SET question = '$question', reponse='$reponse', partie='$partie'
                WHERE  idFaq = '$numeroFaq'";
    $reponse = $db->exec($sql);
    header("location: menuFaqController.php");
}
else if (isset($_POST['annuler'])) {
    header("location: menuFaqController.php");
}
include '../View/base/modifierFaq.php';
?>