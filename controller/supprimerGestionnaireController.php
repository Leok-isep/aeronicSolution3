  
<?php session_start();
include '../model/database.php';
include '../view/header.php';
include '../view/footer.php';
include '../model/requeteGestionnaire.php';

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
include '../view/supprimerGestionnaire.php';
?>