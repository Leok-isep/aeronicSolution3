<?php
global $db;
$codeGest = $_SESSION['modifGestionnaire'];
$q = $db->query("SELECT * FROM gestionnaires WHERE icode='$codeGest'");
$gestionnaire = $q->fetch();
?>