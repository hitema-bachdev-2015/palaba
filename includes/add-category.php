<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="lib/jquery-1.10.1.min"> </script>
        <script type="text/javascript" src="../../script.js"> </script>
        <meta charset="utf-8" />
        <title>Titre</title>
    </head>

    <body>
        <div id="add-category"> 

            <a class="fancybox" rel="nofollow" href="#">
                Ajouter
            </a>
        </div>
        
        <?php
        $dth = new PDO("mysql:host=localhost;dbname=todolist", "root", "",
                array(
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        ?> 
    	<form method="POST" action="#">
            <table>
                <tr> <td> Nom : </td> <td><input type='text' name='nom'/> </td> </tr>
                 <tr> <td> Position : </td> <td> <input type="text" name="pos"/> </td> </tr>
            </table>
            <input type="submit" name="ok" value="OK"/>
    	<?php
    		if (isset($_POST['nom'])) {
                

                $sql = "INSERT INTO category (name, position) VALUES (:nom, :pos)";
                $query = $dth -> prepare($sql);
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

    </body>
</html>