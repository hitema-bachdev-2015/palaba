<?php
	require_once('../includes/bdd.php');
	require_once('../classes/Task.php');

	$myFunction = new Task($_POST['id']);
	$myFunction->setCat($_POST['id_cat']);
	$myFunction->updateCat($_POST['id_cat']);
?>