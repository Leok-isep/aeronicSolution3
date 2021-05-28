<?php session_start();
include '../Model/database.php';
include '../View/base/header.php';
include '../View/base/footer.php';
include '../Model/requeteGestionnaire.php';

if (isset($_POST['oui'])) {

    $code=$_SESSION['modifGestionnaire'];
    $sql = "DELETE from gestionnaires 
                WHERE icode = '$code'";
    $reponse = $db->exec($sql);

    header("location: gestionGestionnaireController.php");
}
else if (isset($_POST['non'])) {

    header("location: gestionGestionnaireController.php");
}
include '../View/base/supprimerGestionnaire.php';
?>
