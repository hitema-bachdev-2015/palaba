<header id="add-task">
	<form action="#" method="POST">
		<input type="text" name="content-task" placeholder="Enter the new task here...">
		<select name="id-category-task">
			<option value="0">Maison</option>
			<option value="1">Travail</option>
			<option value="2">Noel</option>
		</select>
		<input type="text" id="datepicker" name="date_end-task" placeholder="Choissiez la date...">
		<select name="end_type-task">
			<option value="1">Au plus tôt</option>
			<option value="2">Date précise</option>
			<option value="3">Avant de mourir</option>
		</select>
		<input type="submit" name="submit_add-task" value="OK"/>
	</form>
	<script type="text/javascript">
		$("#add-task form input[type='submit']").on("click",function(event){
			event.preventDefault();
			var Content_Task=$("#add-task form input[name='content-task']").val();
			var Category_Task=$("#add-task form select[name='id-category-task']").val();
			var Date_Picker=$("#datepicker").val();
			var End_Type_Task=$("#add-task form select[name='end_type-task']").val();
			$.ajax({
				url : 'ajax/script-addtask.php',
				type : 'POST',
				data: {
						CONTENT:Content_Task,
						CATEGORY:Category_Task,
						DATE:Date_Picker,
						END_TYPE_TASK:End_Type_Task,
					},
       			success : function(data){ // code_html contient le HTML renvoyé
       			alert(data);
       			}
   			});
			//alert(Content_Task+" "+Category_Task+" "+Date_Picker+" "+End_Type_Task);
		});
	</script>
</header>