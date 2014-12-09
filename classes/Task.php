<?php
class Task {

	protected $id;
	private $id_category;
	private $content;
	private $date_end;
	private $end_type;
	private $status;

	function __construct($id, $id_category, $content, $date_end, $end_type, $status){
		$this->id = $i;
		$this->id_category = $id_category;
		$this->content = $content;
		$this->date_end = $content;
		$this->end_type = $date_end;
		$this->status = $status;
	}

	public function setId($i){
		$this->id = $i;
	}

	public function setContent($c){
		$this->content = $c;
	}

	public function setDateEnd($de){
		$this->date_end = $de;
	}

	public function setEndType($et){
		$this->end_type = $et;
	}

	public function setStatus($s){
		$this->status = $s;
	}

	public function getId(){
		return $this->id;
	}

	public function getContent(){
		return $this->content;
	}

	public function getDateEnd(){
		return $this->date_end;
	}

	public function getEndType(){
		return $this->end_type;
	}

	public function getStatus(){
		return $this->status;
	}
	
	public function update($cont, $dateEnd, $endType){

	}

	public function delete(){
		global $dbh;
		$sql = "DELETE FROM task WHERE this->id=id";
		$query = $dbh->prepare($sql);
		return $query->execute();
	}
}
