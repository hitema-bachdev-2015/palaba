<?php 
include('../includes/bdd.php');
include('../classes/Task.php');

$myTask = new Task();  
$myTask->completeTask();
?>