<?php session_start();
include '../model/database.php';
include '../view/header.php';
include '../view/footer.php';
include '../model/requeteGestionnaire.php';

if (isset($_POST['modifier'])) {

    extract($_POST);
    global $db;
    $code=$_SESSION['modifGestionnaire'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $centre=$_POST['centre'];
    $mail=$_POST['mail'];

    $sql = "UPDATE gestionnaires SET firstName = '$prenom', name='$nom', center='$centre' ,mail='$mail' WHERE icode = '$code'";
    $reponse = $db->exec($sql);
    header("Location: gestionGestionnaireController.php");
}
else if (isset($_POST['annuler'])) {
    header("Location: gestionGestionnaireController.php");
}
include '../view/modifierGestionnaire.php';
?>