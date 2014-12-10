<?php

class Category {
	protected $id;
	private $name;
	private $position;
	private $tasks = array();
	private $hydrated = false;



	function __construct($id = null) {
		$this->id = $id;
	}

	public function setId($id){
	 	$this->id = $id;
	}


	public function getId(){

		return $this->id;
	}

	public function getName(){
		if(!$this->hydrated) $this->hydrate();
		return $this->name;
	}

	public function getPosition(){
		if(!$this->hydrated) $this->hydrate();
		return $this->position;
	}

	public function hydrate(){
		global $dbh;
		$query = "SELECT * FROM category WHERE id = :id";

		$sth = $dbh->prepare($query);
		$sth->execute(array(
			"id" 			=> $this->id,));
		$reponse = $sth->fetch();

		$this->name = $reponse["name"];
		$this->position = $reponse["position"];

		$query = "SELECT * FROM task WHERE id_category = :id ORDER BY end_type, date_end ASC";
		$sth = $dbh->prepare($query);
		$sth->execute(array('id'=> $this->id));
		
		while($taskResult = $sth->fetch()) {
			$task = new Task($taskResult["id"]);
			$tasks[] = $task;
	    }

		if (!empty($tasks)) {
			$this->tasks = $tasks;
			$this->hydrated = true;
		}	

	}


	public function reorganisation ($position){
		global $dbh;
		$sql = "UPDATE category SET position = :position WHERE id=:id";
		$query = $dbh->prepare($sql);
		$query->execute(
			array(	'position' => $position,
					'id' => $this->id,
			)
		);
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

	public function getTasks(){
		if(!$this->hydrated) $this->hydrate();
		return $this->tasks;
	}

	
	

}

