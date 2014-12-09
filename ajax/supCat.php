<?php
		$bdd = new PDO('mysql:host=localhost;dbname=todolist', 'root', '', array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
																								PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
																								PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		
		function supCat ($id){
			global $bdd;
			$sql1 = "DELETE FROM category WHERE id=:id";
			$query1 = $bdd->prepare($sql1);
			$query1->execute(
						array(	'id' => $id )
						);

			$sql2 = "DELETE FROM task WHERE id_category=:id";
			$query2 = $bdd->prepare($sql2);
			$query2->execute(
						array(	'id' => $id )
						);
		}
		supCat($_POST['id']);
		var_dump($_POST['id']);

?>