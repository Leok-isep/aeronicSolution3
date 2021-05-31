<?php session_start();
include 'redirectionSession.php';
include "../view/header.php";
include "../view/footer.php";
include '../model/database.php';
include '../model/requeteGestionnaire.php';

if (isset($_POST['oui'])) {
    $code=$_SESSION['modifGestionnaire'];
    $sql = "UPDATE gestionnaires SET banish = 'true' WHERE icode = '$code'";
    $reponse = $db->exec($sql);
    header("location: gestionGestionnaireController.php");
}

else if (isset($_POST['non'])) {
    header("Location: gestionGestionnaireController.php");exit;
}

include '../view/bannirGestionnaire.php';
?>
