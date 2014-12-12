<?php
require_once('../classes/Tools.php');
require_once('../includes/bdd.php');

$content=$_POST["CONTENT"];
$category=$_POST["CATEGORY"];
$date=$_POST["DATE"];
$end_date=$_POST["END_TYPE_TASK"];

if($content!="")
{
	$query2 = "SELECT id FROM `task` WHERE `id_category`=:category AND content=:content";
	$sth2 = $dbh->prepare($query2);
	$sth2->execute(array(
			":category"=>$category,
			":content"=>$content
	));
	$total =$sth2->rowCount();
	if($total!=0)
	{
		$tab=array(
			"content"=>$content,
			"category"=>$category,
			"date"=>$date,
			"end_type_date"=>$end_date,
			"last_id"=>"",
			"id_task"=>"",
			"error"=>"true"
			);
			echo json_encode($tab); 
	}
	else
	{
		$last_id=Tools::addTask($category,$content,$date,$end_date);
		$query = "SELECT id FROM task WHERE id_category=:idCat ORDER BY end_type ASC,date_end ASC";
		$sth = $dbh->prepare($query);
		$id_task=$dbh->lastInsertId(); 
		$sth->execute(array(":idCat"=> $_POST["CATEGORY"]));
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
			"last_id"=>$last_id,
			"id_task"=>$id_task,
			"error"=>"false"
			);

		echo json_encode($tab); 
	}
}
else{}
	?>