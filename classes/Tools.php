<?php

class Tools {
    
    // Insertion d'une nouvelle tache dans la table "task"
	public static function addTask($id_category = null, $content = null, $date_end = null, $end_type = null){
		global $dbh;
		if($date_end==""){
			$date_end=date("Y-m-d H:i:s");
		}
		$req=$dbh->prepare("INSERT INTO task (id_category, content, date_end, end_type, status) VALUES (:category, :content, :date, :end_type, '0')");
		$req->execute(array(
            ":category"=>$id_category,
            ":content"=>$content,
            ":date"=>$date_end,
            ":end_type"=>$end_type
        ));
       return $dbh->lastInsertId();
    }

    // Insertion d'une nouvelle catégorie dans la table "category"
	public static function addCategory($name){
		global $dbh;
        // la requete
        $sql = "INSERT INTO category (name) VALUES (:name)";
        // la preparation
        $query = $dbh->prepare($sql);
        // l'execute
        $query->execute(
                array('name' => $name)
        );
        // creer l'objet category
	}

    // Détermine si $field est vide ou null
    public static function isEmpty($field){
        return ($field === '' || $field === null);
    }

    // Récupération de toutes les catégories
    public static function getAllCat(){
        global $dbh;
        $sql = "SELECT * FROM category ORDER BY position";
        $query = $dbh->prepare($sql);
        $query->execute();
        $reponse = $query->FetchAll();
        foreach ($reponse as $value) {
            $cat[] = new Category($value['id']);
        }
        return $cat;
    }

    // liste de toutes les catégories
    public static function getListCat(){
        global $dbh;
        $sql = "SELECT * FROM category";
        $query = $dbh->prepare($sql);
        $query->execute();
        $reponse = $query->FetchAll();
        return $reponse;
    }

    // liste de toutes les taches
    public static function getListTask(){
        global $dbh;
        $sql = "SELECT * FROM task";
        $query = $dbh->prepare($sql);
        $query->execute();
        $reponse = $query->FetchAll();
        return $reponse;
    }

    // Création d'une nouvelle catégoire dans la table "category"
    public static function newCategory($name){
        global $dbh;
    	// la requete
        $sql = "INSERT INTO category (name) VALUES (:name)";
    	// la preparation
        $query = $dbh->prepare($sql);
    	// l'execute
        $query->execute(
            array('name' => $name)
        );
    	// creer l'objet category
    }

    // Passes toutes les taches au statut terminé
    public static function completeAllTasks()
    {
    	global $dbh;
    	$sql = "UPDATE tasks SET status = 2 WHERE 1";
    	$query = $dbh -> prepare($sql);
    	$query->execute();
    }
}