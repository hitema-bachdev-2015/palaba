<?php
	require_once('../includes/dbConnect.php');
	require_once('../classes/Tools.php');
	require_once('../includes/bdd.php');
	$content=$_POST["CONTENT"];
	$category=$_POST["CATEGORY"];
	$date=$_POST["DATE"];
	$end_date=$_POST["END_TYPE_TASK"];
	Tools::addTask($category,$content,$date,$end_date);
	$tab=array(
			"content"=>$content,
			"category"=>$category,
			"date"=>$date,
			"end_type_date"=>$end_date
		);
		echo json_encode($tab); 
?>