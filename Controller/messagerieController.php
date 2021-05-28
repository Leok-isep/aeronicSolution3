
<?php
session_start();
include "../View/base/header.php";
include "../View/base/footer.php";
include "../Model/database.php";

include '../Model/requeteProfil.php';


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


include "../View/base/messagerie.php";
?>