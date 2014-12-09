<?php

if(file_exists('/wamp/www/PaLaBa/defines.inc.php'))
{
	require_once('/wamp/www/PaLaBa/defines.inc.php');
}
elseif(file_exists('/Applications/MAMP/htdocs/PaLaBa/defines.inc.php'))
{
	require_once('/Applications/MAMP/htdocs/PaLaBa/defines.inc.php');
}
elseif(file_exists('/etc/sites/palaba/defines.inc.php'))
{
	require_once('/etc/sites/palaba/defines.inc.php');
}
elseif(file_exists('/Program Files (x86)/EasyPHP-12.1/defines.inc.php'))
{
	require_once('/Program Files (x86)/EasyPHP-12.1/defines.inc.php');
}
else
{
	define('_DB_HOST_', 'localhost');
	define('_DB_NAME_', 'todolist');
	define('_DB_USERNAME_', 'root');
	define('_DB_PASSWORD_', '');
}

	require_once('includes/bdd.php');
	require_once('classes/Category.php');
	require_once('classes/Task.php');
	require_once('classes/Tools');


?>

<!DOCTYPE html>
<html>
<head>
	<title>Pense à la Baguette</title>
	<meta charset="utf-8">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	<!-- JAVASCRIPT -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
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
<?php include('includes/footer.php'); ?>
</html>