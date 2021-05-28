<?php session_start();
include '../Model/database.php';
include '../View/base/header.php';
include '../View/base/footer.php';
include '../Model/requeteClient.php';

if (isset($_POST['oui'])) {

    $code=$_SESSION['modifclient'];
    $sql = "DELETE from clients 
                WHERE icode = '$code'";
    $reponse = $db->exec($sql);

    header("location: gestionClientController.php");
}
else if (isset($_POST['non'])) {

    header("location: gestionClientController.php");
}
include '../View/base/supprimerClient.php';
?>
