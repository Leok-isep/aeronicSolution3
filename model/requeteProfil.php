<?php 

global $db;
$mail = $_SESSION['mail'];
if ($_SESSION['utilisateur']=='client'){
    $q = $db->query("SELECT * FROM clients WHERE mail='$mail'");
    $user = $q->fetch();
}
elseif ($_SESSION['utilisateur']=='gestionnaire'){
    $q = $db->query("SELECT * FROM gestionnaires WHERE mail='$mail'");
    $user = $q->fetch();
}
elseif ($_SESSION['utilisateur']=='administrateur'){
    $q = $db->query("SELECT * FROM administrateurs WHERE mail='$mail'");
    $user = $q->fetch();
}
?>