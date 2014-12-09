<?php
		$bdd = new PDO('mysql:host=localhost;dbname=todolist', 'root', '', array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
																								PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
																								PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		
		function affichage(){
			global $bdd;
			$sql = "SELECT * FROM category ORDER BY position";
			$query = $bdd->prepare($sql);
			$query->execute();
			$reponse = $query->FetchAll();
			$reponse = json_encode($reponse);
			echo $reponse;
		}
		affichage();

?>