<?php
include "config.php";

//new PDO("mysql:host...", MYSQL_USER, MYSQL_PASS);
$dbh = new PDO('mysql:host=localhost;dbname=MYSQL_DBNAME', 'MYSQL_USER', 'MYSQL_PASS', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ));

