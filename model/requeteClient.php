<?php
global $db;
$codeClient = $_SESSION['modifclient'];
$q = $db->query("SELECT * FROM clients WHERE icode='$codeClient'");
$client = $q->fetch();
?>