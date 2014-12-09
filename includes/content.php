<?php 
      $sql = "SELECT * FROM category ORDER BY position";
      $query = $dbh->prepare($sql);
      $query->execute();
      $reponse = $query->FetchAll();
 ?>
<ul id="sortable">
  <?php 
    for ($i=0; $i < count($reponse) ; $i++) { 
      echo "<li data-id_cat='".$reponse[$i]['id']."'>
                <header>
                  <h2 class='titre'>".$reponse[$i]['name']."</h2>
                  <i data-id_cat='".$reponse[$i]['id']."'>s</i>
                </header>
            </li>";
    }
  ?>
</ul>