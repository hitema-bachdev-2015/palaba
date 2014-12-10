
<ul id="sortable">
  <?php 
    foreach (Tools::getAllCat() as $cat) {
    	$cat->hydrate();
	
    	echo "<li data-id_cat='".$cat->getId()."'>
                <header class='titre'>
                  <h2>".$cat->getName()."</h2>
                  <i data-id_cat='".$cat->getId()."'>x</i>
                </header>
                <ul>"; 
                foreach($cat->getTasks() as $task){
					$task->hydrate();
					echo "<li> ".$task->getContent()." </li>";
                }

    	echo "
            </ul>
            </li>";
    }

  ?>
</ul>