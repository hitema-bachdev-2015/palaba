<ul id ='lateTask'>
<li><header class='titre'>Overdue tasks :</header><li>
<ul>
<?php
	foreach (Tools::getLateTask() as $taskLate) {
		echo "<li>";
		echo $taskLate['content'];
		echo "</li>";
	}
?>
</ul>
</ul>


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
    <ul class='sortableTask'>"; 
    foreach($cat->getTasks() as $task){
      $task->hydrate();

      $check = "";
      if($task->getStatus() == 2){
        $check = 'checked';
      }
      echo "<li data-id_task ='".$task->getId()."''> <i class='fa fa-check btnCheck ".$check."'></i>".$task->getContent()." <i  id='btnDeleteI' class='fa fa-trash btnDelete' style='float: right;'></i> <i id='btnEditi' data-id_task ='".$task->getId()."' class='fa fa-eyedropper btnEdit';'></i></li>";
    }

    echo "</ul></li>";
  }    
  ?>
</ul>