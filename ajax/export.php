<?php
	require_once('../includes/bdd.php');
	require_once('../classes/Tools.php');

    $fp = fopen('../fichier/category.csv', 'w');

	foreach (Tools::getListCat() as $cat) {
		fputcsv($fp, $cat, ';');		
	} 

	fclose($fp);


    $fp = fopen('../fichier/task.csv', 'w');

	foreach (Tools::getListTask() as $task) {
		fputcsv($fp, $task, ';');		
	} 

	fclose($fp);
?>