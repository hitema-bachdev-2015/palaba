<?php
	require_once('../includes/bdd.php');
	require_once('../classes/Tools.php');

    $fp = fopen('../fichier/category.csv', 'w');
    // Nom des colonnes
    $column = array('id', 'name', 'position');
	fputcsv($fp, $column, ';');
	// Value
	foreach (Tools::getListCat() as $cat) {
		fputcsv($fp, $cat, ';');		
	} 
	fclose($fp);


    $fp = fopen('../fichier/task.csv', 'w');
    // Nom des colonnes
    $column = array('id', 'id_category', 'content', 'date_end', 'end_type', 'status');
	fputcsv($fp, $column, ';');
	foreach (Tools::getListTask() as $task) {
		fputcsv($fp, $task, ';');		
	} 

	fclose($fp);
?>