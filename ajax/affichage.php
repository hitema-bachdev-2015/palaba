<?php
	include('../includes/bdd.php');		
	function affichage(){
		global $dbh;
		$sql = "SELECT * FROM category ORDER BY position";
		$query = $dbh->prepare($sql);
		$query->execute();
		$reponse = $query->FetchAll();
		$reponse = json_encode($reponse);
		echo $reponse;
	}
	affichage();

?>