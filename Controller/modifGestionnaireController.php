<?php session_start();
include '../Model/database.php';
include '../View/base/header.php';
include '../View/base/footer.php';
include '../Model/requeteGestionnaire.php';


if (isset($_POST['modifier'])) {

    extract($_POST);
    global $db;
    $code=$_SESSION['modifGestionnaire'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $centre=$_POST['centre'];
    $mail=$_POST['mail'];

    $sql = "UPDATE gestionnaires SET firstName = '$prenom', name='$nom', center='$centre' ,mail='$mail'
                WHERE icode = '$code'";
    $reponse = $db->exec($sql);
    header("location: gestionGestionnaireController.php");
}
else if (isset($_POST['annuler'])) {
    header("location: gestionGestionnaireController.php");
}
include '../View/base/modifierGestionnaire.php';
?>
