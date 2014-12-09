<?php

class Category {
	protected $id;
	private $name;
	private $position;

	function __construct($id = null, $name, $position) {
		setId($id);
		setName($name);
		setPosition($position);
	}


	public function setId($id){
	 	$this->id = $id;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function setPosition($position){
		$this->position = $position;
	}

	public function getId(){
		return $this->id;
	}

	public function getName(){
		return $this->name;
	}

	public function getPosition(){
		return $this->position;
	}


	public function getAllTasks($id){
		$query = "SELECT * FROM task WHERE id = '$id'";

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
    	$i++;
    	$task = new Task($tasks[$i]);
		}	
	return $task;
	}

	
}
?>