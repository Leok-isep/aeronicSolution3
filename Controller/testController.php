<?php
session_start();
include '../View/base/header.php';
include '../Model/database.php';
include '../Model/requetePilote.php';
include '../Model/requeteTest.php';

$temperature=monTest['temperature'];





include '../View/base/test.php';
include '../View/base/footer2.php';

?>