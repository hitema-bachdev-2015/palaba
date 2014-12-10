<?php 
include('../includes/bdd.php');
include('../classes/Tools.php');
Tools::addCategory($_POST['name']);  
?>