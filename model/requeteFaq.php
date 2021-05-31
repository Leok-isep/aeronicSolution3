<?php
global $db;
$codeFaq = $_SESSION['modiffaq'];
$q = $db->query("SELECT * FROM faq WHERE idfaq='$codeFaq'");
$maQuestion = $q->fetch();
?>