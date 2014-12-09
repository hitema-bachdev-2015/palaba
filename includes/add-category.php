
<div id="add-category"> 
    <a class="fancybox" rel="nofollow" href="#">
        Ajouter
    </a>
</div>


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