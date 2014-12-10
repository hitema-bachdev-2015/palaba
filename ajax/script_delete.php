<?php include('../includes/bdd.php');
	  include('../classes/Task.php');
	  echo $_POST['ID'];
	if(isset($_POST['ID'])){
		$new_task = new Task($_POST['ID']);
		$new_task->delete();	
	}
