<?php
	if(file_exists('/wamp/www/PaLaBa/defines.inc.php'))
	{
		require_once('/wamp/www/PaLaBa/defines.inc.php');
	}
	else
	{
		define('_DB_NAME_', 'todolist');
		define('_DB_HOST_', 'root');
		define('_DB_PASSWORD_', '');
	}
?>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script type="text/javascript" src="script.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php include('includes/add-task.php'); ?>



</body>
</html>