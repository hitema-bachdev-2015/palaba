
<ul id="sortable">
  <?php 
    foreach (Tools::getAllCat() as $cat) {
      $reponse = $cat->getCat();
      echo "<li data-id_cat='".$reponse['id']."'>
                <header class='titre'>
                  <h2>".$reponse['name']."</h2>
                  <i data-id_cat='".$reponse['id']."'>x</i>
                </header>
                <ul></ul>
            </li>";
    }
  ?>
</ul>