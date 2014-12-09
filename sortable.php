<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Sortable - Display as grid</title>
  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"> -->
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 450px; }
  #sortable li { margin: 3px 3px 3px 0; padding: 1px; float: left; width: 100px; height: 100px; font-size: 4em; text-align: center;display: inline-block; }
  </style>
  <script>
  $(function() {
    $( "#sortable" ).sortable({
    	placeholder: "element_modif",
    	handle: ".titre",
    	revert: true,
    	update: function(){
    		 $(" #sortable li").each(function(){
    		 	var myId = $(this)[0].attributes[1].value;
    		 	var myIndex = $(this).index();
		    	$.ajax({
				  url: "ajax/move.php",
				  type: "POST",
				  data: { id_cat: myId, index: myIndex }

				});
		    });
    	}
    });
    $( "#sortable" ).disableSelection();
 
  });
  </script>
</head>
<body>
 
<ul id="sortable">
	<?php for ($i=1; $i < 10 ; $i++) { ?>
  		<li class="ui-state-default" data-id='<?php echo $i;?>'><div><i class="titre">lol</i><br><?php echo $i;?></div></li>
  	<?php } ?>
</ul>
 
 
</body>
</html>