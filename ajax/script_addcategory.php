<?php 
	include('../includes/bdd.php');
	include('../classes/Tools.php');

	Tools::newCategory($_POST['name']);  

	// if(isset($_POST['add-category-name'])){
	// 	$name = $_POST['add-category-name'];
	// 	$position = 0;
 //    	Tools::addCategory($name, $position);
	// }
	
?>