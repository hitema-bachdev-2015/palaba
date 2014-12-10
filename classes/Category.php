<?php

class Category {
	protected $id;


	function __construct($id = null) {
		$this->id = $id;
	}

	public function setId($id){
	 	$this->id = $id;
	}


	public function getId(){
		return $this->id;
	}

	public function getCat(){
		global $dbh;
		$query = "SELECT * FROM category WHERE id = :id";

		$sth = $dbh->prepare($query);
		$sth->execute( array('id'=>$this->id));
		$reponse = $sth->fetch();
		return $reponse;
		
	}

	public function supCat (){
		global $dbh;
		$sql1 = "DELETE FROM category WHERE id=:id";
		$query1 = $dbh->prepare($sql1);
		$query1->execute(
					array(	'id' => $this->id )
					);

		$sql2 = "DELETE FROM task WHERE id_category=:id";
		$query2 = $dbh->prepare($sql2);
		$query2->execute(
					array(	'id' => $this->id )
					);
	}
	public function getAllTasks($id){
		global $dbh;
		$query = "SELECT * FROM task WHERE id_category = '$id' ORDER BY end_type, date_end ASC";

		$sth = $dbh->prepare($query);
		$reponse = $sth->execute();
		$tasks =array();
		$i=0;

		while ($reponse = $sth->fetch()) {
   	 		$tasks[$i]['id'] = $reponse['id'];
	   		$tasks[$i]['category'] = $reponse['id_category'];
	   		$tasks[$i]['content'] = $reponse['content'];
	    	$tasks[$i]['date_end'] = $reponse['date_end'];
	    	$tasks[$i]['end_type'] = $reponse['end_type'];
	    	$tasks[$i]['status'] = $reponse['status'];
	    	$task[] = new Task($tasks[$i]['id'], $tasks[$i]['category'], $tasks[$i]['content'], $tasks[$i]['date_end'], $tasks[$i]['end_type'], $tasks[$i]['status']);
	    	$i++;
			
		}
		return $task;
	}
	
}

