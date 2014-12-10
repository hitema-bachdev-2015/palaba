//datepicker
$(document).ready(function() {
	// Gestion deplacement categorie
	    var category = new Category({id : 3});
    category.moveCat();
      category.addTask(1);
    $("#sortable > li > header >i").on('click', function(event){
          var myId = event.currentTarget.attributes[0].value;
          var myLi = event.currentTarget.parentNode.parentNode;
          $.ajax({
            url: "ajax/supCat.php",
            type: "POST",
            data: { id: myId },
            success: function(){
                  myLi.remove();
            }
          });
      });

	
  	$("#datepicker").datetimepicker();
  	$("#datepicker").hide();
  	$("#forKeyup").hide();

	$("select#end_select").change(function(){
		var selected = $("#end_select option:selected").val();
		if(selected == 1){
			$("#datepicker").show();
		}else if(selected != 1){
			$("#datepicker").hide();
		}
	});

	$("#cont-task").keyup(function(){
		var valText = $("#cont-task").val().trim();
			if(valText != null || valText != ''){
				$("#forKeyup").show();
			}
			if(valText == null || valText == ''){
				$("#forKeyup").hide();
			}
	});
  
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
       			console.log(data);

       			}
   			});
			//alert(Content_Task+" "+Category_Task+" "+Date_Picker+" "+End_Type_Task);
		});
  
  	$(".btnDelete").click(function(event){
  		event.preventDefault();
  		$(this).parent().hide();
  		$.ajax({
			url : 'ajax/script_delete.php',
			type : 'POST',
			data: {
				ID : $(this).parent().attr('data-id_tast')
				},
   			success : function(data){ // code_html contient le HTML renvoyé
	   			console.log("Tâche supprimé");
	   			$(this).parent().remove();
   			}
			});
  	});
	
});
