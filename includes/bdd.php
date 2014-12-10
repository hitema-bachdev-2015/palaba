<?php
$array = array(	
	'/wamp/www/PaLaBa/defines.inc.php', 
	'/Applications/MAMP/htdocs/PaLaBa/defines.inc.php', 
	'/etc/sites/palaba/defines.inc.php', 
	'/Program Files (x86)/EasyPHP-12.1/defines.inc.php'
);

$isMatch = false;

for ($i=0; $i < count($array) ; $i++) {
	if(file_exists($array[$i])){
		require_once($array[$i]);
		$isMatch = true;
	}
}

if($isMatch == false){
	define('_DB_HOST_', 'localhost');
	define('_DB_NAME_', 'todolist');
	define('_DB_USERNAME_', 'root');
	define('_DB_PASSWORD_', '');
}

$dbh = new PDO('mysql:host='._DB_HOST_.';dbname='._DB_NAME_, _DB_USERNAME_, _DB_PASSWORD_, array(
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO:: FETCH_ASSOC,
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
));