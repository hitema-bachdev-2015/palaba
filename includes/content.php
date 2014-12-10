<ul id="sortable">
  <?php 
  foreach (Tools::getAllCat() as $cat) {
    $cat->hydrate();

    echo "<li data-id_cat='".$cat->getId()."'>
    <header class='titre'>
    <i class='fa fa-bars moveCat'></i>
    <h2>".$cat->getName()."</h2>
    <i data-id_cat='".$cat->getId()."'><i class='fa fa-times'></i></i>
    </header>
    <ul>"; 
    foreach($cat->getTasks() as $task){
      $task->hydrate();

      echo "<li data-id_task ='".$task->getId()."''> ".$task->getContent()." <i class='fa fa-trash btnDelete' style='float: right;'></i></li>";
    }

    echo "</ul></li>";
  }    
  ?>
</ul>