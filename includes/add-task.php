<header id="add-task">
	<form action="#" method="get">
			<input id="cont-task" type="text" name="content-task" placeholder="Enter the new task here..."> 
		<div id="forKeyup">
			<select name="id-category-task">
				<?php
				$query = "SELECT id,name FROM category";
				$sth = $dbh->prepare($query);
				$sth->execute();
				while ($row = $sth->fetch()) {
				?>
				<option value="<?=$row["id"]?>"><?= $row["name"]?></option>
				<?php
				}
			?>
			</select>
			<input type="text" id="datepicker" name="date_end-task" placeholder="Choissiez la date...">
			<select name="end_type-task" id="end_select">
				<option value="1">Au plus tôt</option>
				<option value="2">Date précise</option>
				<option value="3">Avant de mourir</option>
			</select>
			<input type="submit" name="submit_add-task" value="OK"/>
		</div>
</header>