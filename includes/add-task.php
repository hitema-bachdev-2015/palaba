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
					<option value="<?php echo $row["id"]; ?>"><?php echo $row["name"];?></option>
					<?php
				}
				?>
			</select>
			<input type="text" id="datepicker" name="date_end-task" placeholder="Choissiez la date...">
			<select name="end_type-task" id="end_select">
				<option value="0">Au plus tôt</option>
				<option value="1">Date précise</option>
				<option value="2">Avant de mourir</option>
			</select>
			<input type="submit" name="submit_add-task" value="OK"/>
		</div>
		<div id="forNotif">
				<span id="tNotif">Choisissez quand vous sera envoyé la notification de rappelle de tâche</span>
				<select>
					<option value="1">5min avant</option>
					<option value="2">10min avant</option>
					<option value="3">15 min avant</option>
					<option value="4">30 min avant</option>
					<option value="5">1h avant</option>
					<option value="6">6h après</option>
				</select>
		</div>
	</form>
</header>