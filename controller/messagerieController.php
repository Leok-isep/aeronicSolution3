<?php session_start();
include "../view/header.php";
include "../view/footer.php";
include "../model/database.php";

if(isset($_SESSION['mail'])){
    include '../model/requeteProfil.php';
}

if (isset($_POST['envoi'])) {
    extract($_POST);
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['mail'];
    $to = "solutionsaeronic@gmail.com";
    $subject = "Demande Aeronic Solutions";
    $message = $_POST['contenu'];
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
}
include "../view/messagerie.php";
?>