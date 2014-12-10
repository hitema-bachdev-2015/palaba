<?php 
include('../includes/bdd.php');
include('../classes/Tools.php');
Tools::newCategory($_POST['name']);  
?>