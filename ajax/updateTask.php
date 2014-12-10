<?php
require_once('../includes/bdd.php');
require_once('../classes/Task.php');
$myFunction = new Task($_POST['name']);
$myFunction->updateTask();
?>