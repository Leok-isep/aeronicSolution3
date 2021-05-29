<?php
include '../view/header.php';
include '../view/footer.php';
include '../model/database.php';
include '../model/requeteClient.php';

if (isset($_POST['oui'])) {

    $code=$_SESSION['modifclient'];
    $sql = "DELETE from clients WHERE icode = '$code'";
    $reponse = $db->exec($sql);

    header("Location: gestionClientController.php");
}
else if (isset($_POST['non'])) {

    header("Location: gestionClientController.php");exit;
}
include '../view/supprimerClient.php';
?>