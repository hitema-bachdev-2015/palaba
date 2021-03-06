//datepicker
$(document).ready(function() {
	// Gestion deplacement categorie
	var category = new Category();
	category.moveCat();
	
    $("#sortable > li > header >i").on('click', function(event){
    	var myId = event.currentTarget.attributes[0].value;
    	var myLi = event.currentTarget.parentNode.parentNode;
    	$.ajax({
    		url: "ajax/delCat.php",
    		type: "POST",
    		data: { id: myId },
			beforeSend: function(){
				//console.log("Loading");
				loading();
			},
    		success: function(){
				endLoading();
    			myLi.remove();
                //Supprime le bouton Categorie correspondant
                $("[id='btnTri_id" + myId + "']").remove();
    		}
    	});
    });


    var task = new Task();
    task.moveTask();

    $(".next").on('click', function(event){
        $(this).parent().parent().animate({
            height : $(this).parent().height()-32, 
            overflow : 'auto',
        });
        $(this).hide();
    });

    $(".preview").on('click', function(event){
        $(this).parent().parent().animate({
            height : '310px', 
            overflow : 'hidden',
          },
          400, 
          function() {
            $(".next").show();
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
            $("#forNotif").stop().slideUp();
    	}
    });
	$("#cont-task").keyup(function(){
		var valText = $("#cont-task").val().trim();
			if(valText != null || valText != ''){
               if ($("#forKeyup").is(":animated")==true)
               {
                stop();
               }
               else
               {
                $("#forKeyup").slideDown().show();  
                }

			}
			if(valText == null || valText == ''){
				$("#forKeyup").stop().slideUp();
			}
	});

    $("#datepicker").on("click",function(){
        $("#forNotif").stop().slideDown().show();
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
				async : false,
				beforeSend: function(){
					//console.log("Loading");
					loading();
				},
       			success : function(data){ // code_html contient le HTML renvoyé
					//console.log(data);
					$("#add-task form input[name='content-task']").val("")
					$("#datepicker").val(""); 
                    endLoading();
					addTask(jQuery.parseJSON(data));
       			}
   			});
			//alert(Content_Task+" "+Category_Task+" "+Date_Picker+" "+End_Type_Task);
		});
       
    /***DELETE TASK****/
    var id_to_delete;
    var li_to_delete;
	$(document).on("mouseover", "#sortable > li > div > ul > li", function(event){
        event.preventDefault();
        $(this).children(".btnDelete").css("display","block");
        $(this).children(".btnEdit").css("display","block");

    });
    $(document).on("mouseover", "#lateTask > li > ul > li", function(event){
        event.preventDefault();
        $(this).children(".btnDelete").css("display","block");
       $(this).children(".btnEdit").css("display","block");
    });
	$(document).on("mouseout", "#sortable > li > div > ul > li", function(event){
        event.preventDefault();
       $(this).children(".btnDelete").css("display","none");
       $(this).children(".btnEdit").css("display","none");

    });
    $(document).on("mouseout", "#lateTask > li > ul > li", function(event){
        event.preventDefault();
       $(this).children(".btnDelete").css("display","none");
       $(this).children(".btnEdit").css("display","none");
    });
   $(document).on("click", ".btnDelete", function(event){
        event.preventDefault();
        id_to_delete= $(this).parent().attr('data-id_task');
        li_to_delete = $(this).parent();
        $.fancybox(
            $('#confirm_delete').html(function(){
                $('#textAdded_confirm_delete').text(li_to_delete.text());             
            }),
            {
                // 'width'             : 950,
                // 'height'            : 1100,
                // 'autoScale'         : false,
                // 'transitionIn'      : 'none',
                // 'transitionOut'     : 'none',
                // 'hideOnContentClick': false,
            }); 
    }); 
       $(document).on("click", ".btnEdit", function(event){
        event.preventDefault();
        console.log("blabla");
        var myId = $(event.target).parent().attr("data-id_task");
        console.log(myId);
        $.fancybox(
        $('#titi').html(),
        {
            'onStart': function () {

            }
        }
        );
        $.ajax({
        url: "ajax/displayTask.php",
        type: "POST",
        data: { name: myId },
        beforeSend: function(){
                //console.log("Loading");
                loading();
        },
        success: function(data){
            var content = JSON.parse(data);
            //console.log(content);
            endLoading();
            $(".fancybox-inner .nameTaskUp").val(content['content']);
            $(".fancybox-inner .date_end").datetimepicker();
            $(".fancybox-inner .typeTask").val(content['end_type']);
            $(".fancybox-inner .date_end").val(content['date_end']);
            $(".btnOkFormEdit").click(function () {
                event.preventDefault();
                var date = $(".fancybox-inner .date_end").val();
                var content = $(".fancybox-inner .nameTaskUp").val();
                var typeTask = $(".fancybox-inner .typeTask").val();
                console.log(myId,content,typeTask,date);
                $.ajax({
                    url: "ajax/updateTask.php",
                    type: "POST",
                    data: { 
                        id: myId,
                        name: content,
                        date: date,
                        type: typeTask 
                    },
                    beforeSend: function(){
                        //console.log("Loading");
                        loading();
                    },
                    success: function(data){
                        var content = JSON.parse(data);
                        console.log(content);
                        endLoading();
                        $(".nameTaskUp").val(content['content']);
                        console.log($(".date_end").val());
                    }
                });
            });
        }
    });

    }); 
    $(document).on("click","#confirmDelete",function(event) {
        event.preventDefault();
        var that = $(this);
        $.ajax({
            url : './ajax/delTask.php',
            type : "POST",
            cache   : false,
            data: {ID :id_to_delete},
			 beforeSend: function(){
			 	//console.log("Loading");
                $.fancybox.close();
			 	loading();
			},
            success : function(data){
				endLoading();
                //li_to_delete.remove();
                $("ul#lateTask li[data-id_task=\""+id_to_delete+"\"]").remove();
                $("#sortable li[data-id_cat] li[data-id_task=\""+id_to_delete+"\"]").remove();
            }
        });
    });

    $(document).on("click","#noConfirmDelete",function(event) {
        event.preventDefault();
        endLoading();
        $.fancybox.close();
        $(".btnDelete").css("display", "none");
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
    		//console.log(newCat);
    		$.ajax({
    			url: './ajax/addCat.php',
    			type: 'POST',
    			data: { name: newCat },
				beforeSend: function(){
					$.fancybox.close();
					loading();
				},
				success : function(data){
					endLoading();
				}
    		});
    	});
    });
	
    //Gere les boutons de trie des categories
    $(document).on("click",".btnTri",function(event) {
        //Recupération du data-id et écriture d'un String
        var data_id_cat = "[data-id_cat='" + $(this).val() + "']";      
        //Affiche ou Masque la categorie
        if($(data_id_cat).css('display') == 'none'  ){
            $(data_id_cat).show();
            $(this).css('background-color','orange');
        }
        else {
            $(data_id_cat).hide();
            $(this).css('background-color','red');
        }
    });
    // Gere le bouton d'affichage de TOUTE les Categories
    $(document).on("click",".btnTriTout",function(event) {
        $('#sortable').children("li").show();
        $('#tri_cat > .btnTri').css('background-color','orange');
    });

/** CHECK TASK*/
    $(document).on("click",'.btnCheck',function() {
        $(this).css("color","black");
        var idToUpdate = $(this).parent().attr('data-id_task');
        $.ajax({
          url: './ajax/completeOneTask.php',
          type: 'POST',
          data: {id :idToUpdate}
        });      
    });


  

$("a.complete-task").click(function () {
  $.fancybox(
    $('#matthieu').html(),
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
  $('.btnTaskComplete').on('click', function(){
   event.preventDefault();
   console.log("Test 1 2 1 2 ");
   $.ajax({
    url: './ajax/completeTask.php',
    type: 'POST',  
    beforeSend: function(){
          //console.log("Loading");
          $.fancybox.close();
          loading();
        },
        success : function(data){
          endLoading();
        }
      });

 });

});

  $("#exportDbh").on("click",function(){
    $.ajax({
          url: 'ajax/export.php',
          success: function(data){
            window.open('./fichier/task.csv'); 
            window.open('./fichier/category.csv'); 
          } 
        });
    });
});


