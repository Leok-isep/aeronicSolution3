<?php
global $db;
$test = $_SESSION['testPilote'];
$q = $db->query("SELECT * FROM test WHERE id='$test'");
$monTest = $q->fetch();
?>