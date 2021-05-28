<?php session_start();

include "../View/base/header.php";
include "../View/base/footer.php";
include '../Model/database.php';
include '../Model/requeteGestionnaire.php';


if (isset($_POST['oui'])) {
    $codegestionnaire=$_SESSION['modifGestionnaire'];
    $sql = "UPDATE gestionnaires SET banish = 'true'
                WHERE icode = '$codegestionnaire'";
    $reponse = $db->exec($sql);

    header("location: gestionGestionnaireController.php");
}
else if (isset($_POST['non'])) {
    header("location: gestionGestionnaireController.php");
} include '../View/base/bannirGestionnaire.php';
?>
