
<?php
$chat = new Category(3, 'Noël',3);
$visuChat =$chat->getAllTasks(3);
$testchat = $visuChat->getId();
?>
<ul>
	<li><?php echo $testchat; ?><input type="image" id="btnDelete" src="1418052398_trash-can-delete.png" />

	</li>
	
<ul>
