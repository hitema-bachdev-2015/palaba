<div class="add-cat">
    <a class="fancybox add-cat" rel="nofollow" href="#">+</a>
</div>

<div id="toto" style="display:none;">
	<h2>Add Category</h2><br>
    <form method="post" action="">
    	<label>
    		<span>Name :</span>
    		<input type="text" name="add-category-name"  class="newNameCat" placeholder="Entrer un nom de catégorie" required=""> <br>
    	</label>
        <input type="submit" class='btnSubmitCat' name ="ok" value="OK">
        <?php
        global $dbh;
        if (isset($_POST['nom'])) {
            $sql = "INSERT INTO category (name, position) VALUES (:nom, :pos)";
            $query = $dbh -> prepare($sql);

            $position = 0;

            $query -> execute(array(
                ":nom" => $_POST['nom'],
                ":pos" => $position
            ));
        }

        ?>
    </form>
</div>