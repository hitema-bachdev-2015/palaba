<?php
		$bdd = new PDO('mysql:host=localhost;dbname=todolist', 'root', '', array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
																								PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
																								PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		
		function reorganisation ($position, $id){
			global $bdd;
			$sql = "UPDATE category SET position = :position WHERE id=:id";
			$query = $bdd->prepare($sql);
			$query->execute(
						array(	'position' => $position,
								'id' => $id,
							)
						);
		}
		reorganisation($_POST['index'], $_POST['id_cat']);

?>