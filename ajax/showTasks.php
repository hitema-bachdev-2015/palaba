
<?php
require("../includes/bdd.php");
require("../classes/Task.php");
require("../classes/Category.php");
$chat = new Category($_POST['IDCAT']);
$visuChat = $chat->getAllTasks($_POST['IDCAT']);

echo "<ul>";
foreach($visuChat as $value)
{
	echo "<li data-id='".$value->getId()."' >".
	$value->getContent()."<img class=\"btnDelete\" src=\"img/corbeille.png\" />
	</li>";
}
echo"</ul>";
?>