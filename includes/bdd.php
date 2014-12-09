<?php
<<<<<<< HEAD
$bdd = new PDO('mysql:host=localhost;dbname=todolist', 'root', '', array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
																								PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
																								PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
=======
include "config.php";

$dbh = new PDO('mysql:host=_DB_HOST_;dbname=_DB_NAME_', '_DB_USERNAME_', '_DB_PASSWORD_', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ));

>>>>>>> 84aaa6785a9aa285e0685703764479850b37d1b0
