<?php
	include('../includes/bdd.php');
	function reorganisation ($position, $id){
		global $dbh;
		$sql = "UPDATE category SET position = :position WHERE id=:id";
		$query = $dbh->prepare($sql);
		$query->execute(
			array(	'position' => $position,
					'id' => $id,
			)
		);
	}
	reorganisation($_POST['index'], $_POST['id_cat']);

?>