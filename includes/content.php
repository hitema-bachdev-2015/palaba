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
                <header class='titre'>
                  <h2>".$reponse[$i]['name']."</h2>
                  <i data-id_cat='".$reponse[$i]['id']."'>s</i>
                </header>
                <ul>";
                   // affichage des taches
                   $sql1 = "SELECT * FROM task WHERE id_category=:id ORDER BY end_type,date_end ";
                   $query1 = $dbh->prepare($sql1);
                   $query1->execute(
                      array('id'=> $reponse[$i]['id'])
                    );
                   $reponse1 = $query1->FetchAll();
                   for ($x=0; $x < count($reponse1) ; $x++):
                      echo "<li data-id_tast='".$reponse1[$x]['id']."'>".$reponse1[$x]['content']."</li>";
                   endfor;
      echo "    </ul>
            </li>";
    }
  ?>
</ul>