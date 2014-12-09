<?php include('../includes/bdd.php');
	  include('../classes/Task.php');

	if(isset($_POST['ID'])){
		$new_task = new Task($_POST['ID]']);
		$new_task->delete();	
	}
