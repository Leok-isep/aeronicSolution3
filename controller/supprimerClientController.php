<?php session_start();
include 'redirectionSession.php';
include '../view/header.php';
include '../view/footer.php';
include '../model/database.php';
include '../model/requeteClient.php';

if (isset($_POST['oui'])) {
    $code=$_SESSION['modifclient'];
    $sqlClient = $db->prepare("DELETE from clients WHERE icode = '$code'");
    $sqlClient->execute();

    $sqlCode = $db->prepare("DELETE from icodes WHERE icode = '$code'");
    $sqlCode->execute();
    header("Location: gestionClientController.php");
}
else if (isset($_POST['non'])) {

    header("Location: gestionClientController.php");exit;
}
include '../view/supprimerClient.php';
?>
