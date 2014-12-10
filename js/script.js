//datepicker
$(document).ready(function() {
	// Gestion deplacement categorie
	var category = new Category({id : 3});
	category.moveCat();
    //category.addTask(1);
    $("#sortable > li > header >i").on('click', function(event){
    	var myId = event.currentTarget.attributes[0].value;
    	var myLi = event.currentTarget.parentNode.parentNode;
    	$.ajax({
    		url: "ajax/delCat.php",
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
				$("#forKeyup").stop().slideDown().show();
			}
			if(valText == null || valText == ''){
				$("#forKeyup").stop().slideUp();
			}
	});
  
    $("#add-task form input[type='submit']").on("click",function(event){
			event.preventDefault();
			var Content_Task=$("#add-task form input[name='content-task']").val();
			var Category_Task=$("#add-task form select[name='id-category-task']").val();
			var Date_Picker=$("#datepicker").val();
			var End_Type_Task=$("#add-task form select[name='end_type-task']").val();
			$.ajax({
				url : 'ajax/addTask.php',
				type : 'POST',
				data: {
						CONTENT:Content_Task,
						CATEGORY:Category_Task,
						DATE:Date_Picker,
						END_TYPE_TASK:End_Type_Task,
					},
       			success : function(data){ // code_html contient le HTML renvoyé
					console.log(data);
					$("#add-task form input[name='content-task']").val("")
					$("#datepicker").val("");
					addTask(jQuery.parseJSON(data));
       			}
   			});
			//alert(Content_Task+" "+Category_Task+" "+Date_Picker+" "+End_Type_Task);
		});
    
    /***DELETE TASK****/
    var id_to_delete;
    var li_to_delete;
    $(".btnDelete").click(function(event){
    	event.preventDefault();
    	id_to_delete= $(this).parent().attr('data-id_task');
    	li_to_delete = $(this).parent();
    	$.fancybox(
    		$('#confirm_delete').html(),
    		{
    			'width'             : 950,
    			'height'            : 1100,
    			'autoScale'         : false,
    			'transitionIn'      : 'none',
    			'transitionOut'     : 'none',
    			'hideOnContentClick': false,
    		} 
    		);	
    });	
    $(document).on("click","#confirmDelete",function(event) {
    	event.preventDefault();
    	var that = $(this);
    	$.ajax({
    		url : './ajax/delTask.php',
    		type : "POST",
    		cache	: false,
    		data: {ID :id_to_delete},
    		success : function(data){
    			li_to_delete.remove();
    			$.fancybox.close();
    		}
    	});
    });

    $(document).on("click","#noConfirmDelete",function(event) {
    	event.preventDefault();
    	$.fancybox.close();
    });
    /****/
    $("a.add-cat").click(function () {
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

    	$(".btnSubmitCat").on("click", function(event){
    		event.preventDefault();
    		var newCat = $('.fancybox-inner .newNameCat').val();
    		console.log(newCat);
    		$.ajax({
    			url: './ajax/addCat.php',
    			type: 'POST',
    			data: { name: newCat },  
    		});
    		$.fancybox.close();
    	});

    });

    $("#sortable > li > ul > li").on("click",function (event) {
	// console.log("a");

	event.preventDefault();
	var myId = event.target.attributes[0].value;
	console.log(myId);

	$.ajax({
		url: "ajax/displayTask.php",
		type: "POST",
		data: { name: myId },
		success: function(data){
			var content = JSON.parse(data);
			console.log(content);
			$(".nameTaskUp").val(content['content']);
			$(".date_end").datetimepicker();
			$(".typeTask").val(content['end_type']);
			$(".date_end").val(content['date_end']);
			$(".btnOkFormEdit").click(function () {
				event.preventDefault();
				var date = $(".date_end").val();
				var content = $(".typeTask").val();
				var typeTask = $(".end_type").val();
				$.ajax({
					url: "ajax/updateTask.php",
					type: "POST",
					data: { name: content,
						date: date,
						type: typeTask 
					},
					success: function(data){
						var content = JSON.parse(data);
						console.log(content);
						$(".nameTaskUp").val(content['content']);
						console.log($(".date_end").val());
					}
				});
			});
		}
	});

	$.fancybox(
		$('#titi').html(),
		{
			'onStart': function () {

			}
		}
		);

});

$('#task-complete').on('click', function(){
	event.preventDefault();
});
});


