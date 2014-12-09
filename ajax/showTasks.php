
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
	$value->getContent()."<input type=\"image\" class=\"btnDelete\" src=\"1418052398_trash-can-delete.png\" />
	</li>";
}
echo"</ul>";
?>