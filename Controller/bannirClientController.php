<?php session_start();

include "../View/base/header.php";
include "../View/base/footer.php";
include '../Model/database.php';
include '../Model/requeteClient.php';


if (isset($_POST['oui'])) {
    $codeclient=$_SESSION['modifclient'];
    $sql = "UPDATE clients SET banish = 'true'
                WHERE icode = '$codeclient'";
    $reponse = $db->exec($sql);

    header("location: gestionClientController.php");
}
else if (isset($_POST['non'])) {
    header("location: gestionClientController.php");
} include '../View/base/bannirClient.php';
?>
