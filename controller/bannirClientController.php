<?php session_start();
include "../view/header.php";
include "../view/footer.php";
include '../model/database.php';
include '../model/requeteClient.php';

if (isset($_POST['oui'])) {
    $codeclient=$_SESSION['modifclient'];
    $sql = "UPDATE clients SET banish = 'true' WHERE icode = '$codeclient'";
    $reponse = $db->exec($sql);
    header("location: gestionClientController.php");
}

else if (isset($_POST['non'])) {
    header("Location: gestionClientController.php");exit;
} 

include '../view/bannirClient.php';
?>