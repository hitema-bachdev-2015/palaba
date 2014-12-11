<?php 
include('../includes/bdd.php');
include('../classes/Task.php');

$task = new Task($_POST['id']); 
$task->completeThisTask();
?>