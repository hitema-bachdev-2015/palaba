<?php
	require_once('includes/bdd.php');
	require_once('classes/Task.php');
	require_once('classes/Category.php');
	require_once('classes/Tools.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pense à la Baguette</title>
	<meta charset="utf-8">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css">
	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
	<link rel="stylesheet" href="css/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/fancybox/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/fancybox/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
	<!-- JAVASCRIPT -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.datetimepicker.js"></script>
	<script type="text/javascript" src="js/task.js"></script>
	<script type="text/javascript" src="js/category.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.mousewheel.pack.js"></script>
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js"></script>
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js"></script>
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
</head>
<body>
	<?php 
		include('includes/add-task.php');

		include('includes/content.php');

		include('includes/add-category.php');

		include('includes/footer.php');
	?>
<script>
$(document).ready(function(){
	$("a.add-cat").click(function () {
		console.log("a");
        $.fancybox(
                $('#toto').html(),
                {
                    'width'             : 950,
                    'height'            : 1100,
                    'autoScale'         : false,
                    'transitionIn'      : 'none',
                    'transitionOut'     : 'none',
                    'hideOnContentClick': false,
                    'onStart': function () {
                      //On Start callback if needed  
                    }
                 }
            );
    });
});
</script>
</body>
</html>