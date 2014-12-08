<?php
class Task {

	protected $id;
	private $id_category;
	private $content;
	private $date_end;
	private $end_type;
	private $status;

	function __construct($id, $id_category, $content, $date_end, $end_type, $status){
		setid($id);
		setContent($content);
		setDateEnd($date_end);
		setEndType($end_type);
		setStatus($status);
	}

	public setid($i){
		$this->id = $i;
	}

	public setContent($c){
		$this->content = $c;
	}

	public setDateEnd($de){
		$this->date_end = $de;
	}

	public setEndType($et){
		$this->end_type = $et;
	}

	public setStatus($s){
		$this->status = $s;
	}

	public getId(){
		return $this->id;
	}

	public getContent(){
		return $this->content;
	}

	public getDateEnd(){
		return $this->date_end;
	}

	public getEndType(){
		return $this->end_type;
	}

	public getStatus(){
		return $this->status;
	}
	
	public function update($cont, $dateEnd, $endType){

	}

	public function delete(){

	}
}
