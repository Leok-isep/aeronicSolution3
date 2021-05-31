<?php
global $db;
$pilote = $_SESSION['pilote'];
$q = $db->query("SELECT * FROM clients WHERE icode='$pilote'");
$monPilote = $q->fetch();
?>