
<?php
$chat = new Category(3);
$visuChat =$chat->getAllTasks(3);
$testchat = $visuChat->getId();

$d_html="";
$d_html .= "
<ul>
	<li>
		$testchat<input type=\"image\" class=\"btnDelete\" src=\"1418052398_trash-can-delete.png\" />
	</li>
<ul>";
?>