<?php session_start();
include 'redirectionSession.php';
include '../model/database.php';
include '../view/header.php';
include '../view/footer.php';
include '../model/requeteGestionnaire.php';

if (isset($_POST['oui'])) {

    $code=$_SESSION['modifGestionnaire'];
    $sqlGest = $db->prepare("DELETE from gestionnaires WHERE icode = '$code'");
    $sqlGest->execute();

    $sqlCode = $db->prepare("DELETE from icodes WHERE icode = '$code'");
    $sqlCode->execute();

    header("location: gestionGestionnaireController.php");
}
else if (isset($_POST['non'])) {
    header("location: gestionGestionnaireController.php");
}
include '../view/supprimerGestionnaire.php';
?>
