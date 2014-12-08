<?php
	if(file_exists('/wamp/www/PaLaBa/defines.inc.php'))
	{
		require_once('/wamp/www/PaLaBa/defines.inc.php');
	}
	elseif(file_exists('/Applications/MAMP/htdocs/PaLaBa/defines.inc.php')){
		require_once('/Applications/MAMP/htdocs/PaLaBa/defines.inc.php');
	}
	else
	{
		define('_DB_HOST_', 'localhost');
		define('_DB_NAME_', 'todolist');
		define('_DB_USERNAME_', 'root');
		define('_DB_PASSWORD_', '');
	}
?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php include('includes/add-task.php'); ?>

<?php include('includes/content.php'); ?>

<?php include('includes/add-category.php'); ?>

<?php include('includes/footer.php'); ?>
</body>
</html>