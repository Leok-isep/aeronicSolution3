<?php session_start();
include '../Model/database.php';
include '../View/base/header.php';
include '../View/base/footer.php';
include '../Model/requeteClient.php';


if (isset($_POST['modifier'])) {

    extract($_POST);
    global $db;
    $code=$_SESSION['modifclient'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $date=$_POST['date'];
    $kind=$_POST['genre'];
    $compagnie=$_POST['compagnie'];
    $mail=$_POST['mail'];

    $sql = "UPDATE clients SET firstName = '$prenom', name='$nom', birthDate='$date', kind='$kind',company='$compagnie' ,mail='$mail'
                WHERE icode = '$code'";
$reponse = $db->exec($sql);
header("location: gestionClientController.php");
}
else if (isset($_POST['annuler'])) {
    header("location: gestionClientController.php");
}
include '../View/base/modifierClient.php';
?>
