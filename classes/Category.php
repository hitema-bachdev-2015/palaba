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


	public setId($id){
	 	$this->id = $id;
	}

	public setName($name){
		$this->name = $name;
	}

	public setPosition($position){
		$this->position = $position;
	}

	public getId(){
		return $this->id;
	}

	public getName(){
		return $this->name;
	}

	public getPosition(){
		return $this->position;
	}


	public getAllTasks(){
		

	}

	
}
?>