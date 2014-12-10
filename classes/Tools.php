<?php

class Tools {

	public static function addTask($id_category = null, $content = null, $date_end = null, $end_type = null){
		global $dbh;
		if($date_end=="")
		{
			$date_end=date("Y-m-d H:i:s");
		}
		$req=$dbh->prepare("INSERT INTO `task` (`id_category`, `content`, `date_end`, `end_type`, `status`) VALUES (:category, :content, :date, :end_type, '0')");
		$req->execute(array(
				":category"=>$id_category,
				":content"=>$content,
				":date"=>$date_end,
				":end_type"=>$end_type
			));
			return $dbh->lastInsertId();
	}

	public static function addCategory($name = null, $position = null){
		global $dbh;
		$sql = "INSERT INTO category (name, position) VALUES (:nom, :pos)";
        $query = $dbh -> prepare($sql);
        $query -> execute(array(
            ":nom" => $name,
            ":pos" => $position
            ));
	}

	public static function isEmpty($field)
    {
        return ($field === '' || $field === null);
    }

}