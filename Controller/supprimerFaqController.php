<?php session_start();
include '../Model/database.php';
include '../View/base/header.php';
include '../View/base/footer.php';
include '../Model/requeteFaq.php';

if (isset($_POST['oui'])) {

    $numeroQuestion=$_SESSION['modiffaq'];
    $sql = "DELETE from faq 
                WHERE idFaq = '$numeroQuestion'";
    $reponse = $db->exec($sql);

    header("location: menuFaqController.php");
}
else if (isset($_POST['non'])) {

    header("location: menuFaqController.php");
}
include '../View/base/supprimerFaq.php';
?>
