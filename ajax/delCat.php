<?php
include('../includes/bdd.php');
require_once('../classes/Category.php');
$myFunction = new Category($_POST['id']);
$myFunction->supCat();
?>