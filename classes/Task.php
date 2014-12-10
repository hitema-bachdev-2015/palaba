<?php
class Task {
	protected $id;
	private $id_category;
	private $content;
	private $date_end;
	private $end_type;
	private $status;
	private $hydrated = false;

	function __construct($id){
		$this->id = $id;
	}

	public function setContent($c){
		if(!$this->hydrated) $this->hydrate();

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

	public function hydrate(){
		global $dbh;
		$query= "SELECT * FROM task Where id = :id";
		$sth = $dbh->prepare($query);
		$sth->execute(array(
			'id'=> $this->id
		));
		$reponse = $sth->Fetch();
		
		$this->content = $reponse["content"];
		$this->date_end = $reponse["date_end"];
		$this->end_type = $reponse["end_type"];
		$this->status = $reponse["status"];
		

	}

	public function selectTask(){
		global $dbh;
		$req = "SELECT * FROM task WHERE id=:id";
		$query = $dbh->prepare($req);
		$query->execute(array(
			'id' => $this->id
		));
		$reponse = $query->fetch();
		echo json_encode($reponse);
	}

	public function updateTask(){
		global $dbh;
		$req = "UPDATE task SET content = :content,
		end_type = :end_type, 
		date_end = :date_end WHERE id= :id";

		$query = $dbh->prepare($req);
		$query->execute(array(
			'id' => $this->id,
			'content' => $this->content,
			'end_type' => $this->end_type,
			'date_end' => $this->date_end
		));
		
	}

	public function delete(){
		global $dbh;
		$sql = "DELETE FROM todolist.task WHERE task.id = :id";
		$query = $dbh->prepare($sql);
		$query->execute(array(
			':id' => $this->id
		));
	}

	public function completeTask(){
		global $dbh;
		$sql = "UPDATE task SET status = 2 WHERE 1";
		$query = $dbh->prepare($sql);
		$query->execute();
	}
}
