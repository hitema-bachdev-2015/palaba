<div class="clear both"></div>
<div class="add-cat">
    <a class="fancybox add-cat" rel="nofollow" href="#">+</a>
</div>

<div id="toto" style="display:none;">
	<h2>Add Category</h2><br>
    <form method="post" action="">
    	<label>
    		<span>Name :</span>
    		<input type="text" name="add-category-name" placeholder="Entrer un nom de catégorie"> <br>
    		<span>Position :</span>
    		<select name="add-category-position">
    			<?php
    				for ($i = 0; $i < 3; $i++){
    					echo "<option name=".$i."> $i </option>";
    				}
    			?>

    		</select>
    	</label>
        <input type="submit" name ="ok" value="OK">
        <?php
       		global $dbh;
        	if (isset($_POST['nom'])) {
                $sql = "INSERT INTO category (name, position) VALUES (:nom, :pos)";
                $query = $dbh -> prepare($sql);
                $resul = $query -> fetchAll();

                if (!isset($_POST['pos']))
                {
                    $position = 0;
                }else{
                    $position = $_POST['pos'];
                }
                $query -> execute(array(
                    ":nom" => $_POST['nom'],
                    ":pos" => $position
                    ));
            }
        	
        ?>
    </form>
</div>