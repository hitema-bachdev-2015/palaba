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
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css">
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link rel="stylesheet" href="css/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/fancybox/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/fancybox/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/anorak.css" type="text/css" media="screen" />
	<!-- JAVASCRIPT -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.datetimepicker.js"></script>
	<script type="text/javascript" src="js/task.js"></script>
	<script type="text/javascript" src="js/category.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.mousewheel.pack.js"></script>
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js"></script>
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js"></script>
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
	<script type="text/javascript" src="js/anorak.js"></script>
</head>
<body>	
	<?php include('includes/add-task.php'); ?>



	<div id="contener">
		<h1>Gestionnaire de tache</h1>
		<?php include('includes/content.php'); ?>
		<span id='exportDbh'>Export DBH</span>
		<?php include('includes/add-category.php'); ?>
		<?php include('includes/confirm-delete.php'); ?>
		<?php include('includes/tasks-complete.php'); ?>
		<?php include('includes/edittask.php'); ?>


	</div>
	<?php include('includes/footer.php'); ?>

</body>
</html>