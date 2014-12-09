<?php
		include('../includes/bdd.php');
		function supCat ($id){
			global $dbh;
			$sql1 = "DELETE FROM category WHERE id=:id";
			$query1 = $dbh->prepare($sql1);
			$query1->execute(
						array(	'id' => $id )
						);

			$sql2 = "DELETE FROM task WHERE id_category=:id";
			$query2 = $dbh->prepare($sql2);
			$query2->execute(
						array(	'id' => $id )
						);
		}
		supCat($_POST['id']);
		var_dump($_POST['id']);

?>