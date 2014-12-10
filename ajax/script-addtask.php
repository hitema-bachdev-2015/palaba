<?php
	require_once('../includes/dbConnect.php');
	require_once('../classes/Tools.php');
	require_once('../includes/bdd.php');
	$content=$_POST["CONTENT"];
	$category=$_POST["CATEGORY"];
	$date=$_POST["DATE"];
	$end_date=$_POST["END_TYPE_TASK"];
	$last_id=Tools::addTask($category,$content,$date,$end_date);

	$query = "SELECT id FROM task ORDER BY end_type ASC,date_end ASC";
	$sth = $dbh->prepare($query);
	$sth->execute();
	$rows=$sth->fetchAll();		
	for($i=0;$i<count($rows);$i++)
	{
		if($rows[$i]["id"]==$last_id)
		{
			$last_id=$i;
		}
	}

	$tab=array(
			"content"=>$content,
			"category"=>$category,
			"date"=>$date,
			"end_type_date"=>$end_date,
			"last_id"=>$last_id
		);

		echo json_encode($tab); 
?>