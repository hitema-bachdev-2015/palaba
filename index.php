<?php
	require_once('includes/bdd.php');
	require_once('classes/Task.php');
	require_once('classes/Category.php');
	require_once('classes/Tools.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pense à la Baguette</title>
	<meta charset="utf-8">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css">
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	<!-- JAVASCRIPT -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.datetimepicker.js"></script>
	<script type="text/javascript" src="js/task.js"></script>
	<script type="text/javascript" src="js/category.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</head>
<body>
	<?php include('includes/add-task.php'); ?>

	<?php include('includes/content.php'); ?>
	
	<?php include('includes/add-category.php'); ?>

	<?php include('includes/footer.php'); ?>

</body>
</html>