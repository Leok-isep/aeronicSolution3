<?php
    define('HOST','localhost');
    define('DB_NAME','ttwawain_aeronicsolutions');
    define('USER','aeronicsolutions');
    define('PASS','aeronicsolutions1');

    try {
        $db = new PDO("mysql:host=" .HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo $e;
    }
?>