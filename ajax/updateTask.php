<?php
require_once('../includes/bdd.php');
require_once('../classes/Task.php');

$myFunction = new Task($_POST['id']);
$myFunction->updateTask($_POST['name'],$_POST['date'],$_POST['type']);
?>