<footer>
	<div id="tri_cat">
		<button class="btnTriTout" value="tout">Tout</button>
		<?php
			$query = "SELECT * FROM category";
			$sth = $dbh->prepare($query);
			$sth->execute();
			while($cat = $sth->fetch()){
				echo "<button class='btnTri' id='btnTri_id". $cat['id'] . "' value=". $cat['id'] . " background-color='orange'>" . $cat['name'] . "</button>";
			}
		?>
	</div>
	PALaBa &copy 2014-2015
</footer>