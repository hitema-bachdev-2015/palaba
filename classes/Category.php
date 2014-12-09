<?php

class Category {
	protected $id;
	private $name;
	private $position;

	function __construct($id = null, $name, $position) {
		$this->id = $id;
		$this->name = $name;
		$this->position = $position;
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
		global $dbh;
		$query = "SELECT * FROM task WHERE id = '$id' ORDER BY end_type, date_end ASC";

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
	    	$task = new Task($tasks[$i]['id'], $tasks[$i]['category'], $tasks[$i]['content'], $tasks[$i]['date_end'], $tasks[$i]['end_type'], $tasks[$i]['status']);
	    	$i++;
			return $task;
		}

	}
}
$chat = new Category(3, 'Noël',3);
$visuChat =$chat->getAllTasks(3);

?>