<?php 
include '../controller/motDePasse.php';
include 'requeteProfil.php';

if (isset($_POST['envoi'])) {
    extract($_POST);
    global $db;
    $_SESSION['mail']=$_POST['mail'];
    $mail=$_SESSION['mail'];
    $password=$_POST['password'];

    if ($_SESSION['utilisateur']=='client'){
        $sql = "UPDATE clients SET password = '$mdp' WHERE mail = '$mail'";
        $reponse = $db->exec($sql);
    }

    else if ($_SESSION['utilisateur']=='administrateur'){
        $sql = "UPDATE administrateurs SET password = '$mdp' WHERE mail = '$mail'";
        $reponse = $db->exec($sql);
    }

    else if ($_SESSION['utilisateur']=='gestionnaire'){
        $cabinet=$_POST['cabinet'];
        $sql = "UPDATE gestionnaires SET password = '$mdp' WHERE mail = '$mail'";
        $reponse = $db->exec($sql);
    }
}
?>