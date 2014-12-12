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
	<?php if(isset($_GET['newstyle'])){ ?>
	<link rel="stylesheet" type="text/css" href="css/newstyle.css">
	<?php }else{ ?>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<?php } ?>
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css">
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link rel="stylesheet" href="css/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/fancybox/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/fancybox/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/anorak.css" type="text/css" media="screen" />
	<!-- JAVASCRIPT -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.datetimepicker.js"></script>
	<script type="text/javascript" src="js/task.js"></script>
	<script type="text/javascript" src="js/category.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/fancybox/jquery.mousewheel.pack.js"></script>
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-buttons.js"></script>
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-media.js"></script>
	<script type="text/javascript" src="js/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
	<!-- // <script type="text/javascript" src="js/anorak.js"></script> -->
	<script type="text/javascript" src="js/nc.js"></script>
</head>
<body>	
	<div id='colortheme'>
		<div id='myColorPicker'>
				<h2>ColorPicker</h2>
				<span data-color="#4183D7">reset</span>
				<span data-color="#558B1F">vert</span>
				<span data-color="#E5373E">rouge</span>
				<span data-color="#5F5E5E">gris</span>
				<span data-color="url(fichier/plage.jpg) 50% 0% fixed">plage</span>
				<span data-color="url(fichier/kaaris.jpg) 50% 0% fixed">KAARIS</span>
		</div>
	</div>
	<canvas id="canvas"></canvas>
	<header id="header-site">
		<nav class="wrap"><ul><li></li></ul></nav>
	</header>
	<?php include('includes/add-task.php'); ?>

	<div class="wrap content">
		<div id="column-left"></div>
		<div id="contener">
			
			<h1>Gestionnaire de tache</h1>
			<?php include('includes/content.php'); ?>
			<span id='exportDbh'>Export DBH</span>
			<?php include('includes/add-category.php'); ?>
			<?php include('includes/confirm-delete.php'); ?>
			<?php include('includes/sameTask.php'); ?>
			<?php include('includes/tasks-complete.php'); ?>
			<?php include('includes/edittask.php'); ?>
		</div>
	</div>
	<?php include('includes/footer.php'); ?>

</body>
<style type="text/css">
div#colortheme {
	position: absolute;
	top: 20%;
	background: rgb(65, 131, 215);
	color: #fff;
	width: 15px;
	height: 50px;
	border-radius: 0 10px 10px 0;
	cursor: pointer;
}

#myColorPicker{
	display: none;
}
#myColorPicker h2 {
	padding: 10px;
}

#myColorPicker span {
	display: block;
	line-height: 20px;
}

</style>
<script type="text/javascript">
	$("#colortheme").on('mouseenter', function(){
		$("#colortheme").animate({
			width: '100',
			height: '150'
		}, 400,
		function(){
			$('#myColorPicker').show();
		});	

		

	});
	$("#colortheme").on('mouseleave', function(){
		$("#colortheme").animate({
			width: '15',
			height: '50'
		});

		$('#myColorPicker').hide();

	});

	$("#myColorPicker > span").on('click', function(){
			var sizeColor = $(this).attr('data-color').length;
			var myColor = $(this).attr('data-color');
			if (sizeColor > 8){
				$("body").css('background', myColor);
			}else{
				$("#add-task").css('background', myColor);
				$("#lateTask > li > header").css('background', myColor);
				$("#exportDbh").css('background', myColor);
				$("div.complete-task").css('background', myColor);
				$("div.add-cat").css('background', myColor);
				$("div#colortheme").css('background', myColor);
				$("#sortable > li > header").css('background', myColor);
				$("i#sortable > li > header").css('color', myColor);
				$("i#btnDeleteI, #btnEditi").css('color', myColor);
			}

	});
</script>
</html>