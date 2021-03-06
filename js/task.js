var Task=function(params){
	// this.id=params.id;
	// this.idCategory = params.idCategory;
	// this.content = params.content;
	// this.dateEnd = params.dateEnd;
	// this.endType = params.endType;
	// this.status = params.status;
	
	// addTask(params);
}

Task.prototype.moveTask=function(){
    $( ".sortableTask" ).sortable({
      	connectWith: ".sortableTask",
    	// handle: "",
    	revert: true,
    	update: function(event){
    		$(" .sortableTask > li").each(function(){
          		var myId = $(this).attr('data-id_task');
          		var myIdCat = $(this)[0].parentNode.parentNode.attributes[0].value;
    			console.log(myId+" "+myIdCat);
    			$.ajax({
		    		url: "ajax/taskChangeCat.php",
		    		type: "POST",
		    		data: { id: myId , id_cat: myIdCat},
		    		success: function(data){
		    			console.log(data);
		    		}
		    	});
    		});
    	}
    }).disableSelection();
}

function loading()
{
	$("#contener").css("opacity", "0.5");
	var section=document.createElement("section");
	$(section).addClass( "section section2" );
	$(section).append("<span class=\"loader loader-double\" ></span>");
	$(section).append("Chargement...");
	$("body").append($(section));
}
function endLoading()
{
	$(".section").remove();
	$("#contener").css("opacity", "1");
}
function addTask(params){
	console.log(params);
	if(params.error=="false")
	{
		//Mise de l'id de l'�l�ment dans une variable
		var id=params.id_task;
		//Mise de la position � ajouter, dans une variable
		var position=params.last_id;
		//Mise de l'id de la cat�gorie ou se trouve la tache dans une variable
		var idCat=params.category;
		var endType=params.end_type_date;
		var date=null;
		var content=params.content;
		var Element=null;
		var parentContainer=$("#sortable li[data-id_cat=\""+idCat+"\"]");	
		var li = document.createElement("li");
		
		$(li).text(content);
		$(li).addClass("ui-sortable-handle");
		$(li).attr("data-id_task", id);  
		$(li).append( "<i class=\"fa fa-check btnCheck\"></i>" );
		$(li).append("<i id=\"btnDeleteI\" class=\"fa fa-trash btnDelete\"></i>");
		$(li).append("<i id=\"btnEditi\" class=\"fa fa-eyedropper btnEdit\"></i>");

		if(position==0)
		{
			var ul=$("#sortable li[data-id_cat=\""+idCat+"\"] div.myElement ul.sortableTask");
			$(ul).append( $(li) );
		}
		else
		{
			
			Element=$("#sortable li[data-id_cat=\""+idCat+"\"] ul li:nth-child("+(position)+")");
			switch(endType)
			{
				case "0":
					$(li).insertBefore(Element);//append before Element
					break;
				case "2":
					$(li).insertAfter(Element);//append after Element
					break;
				default:
					$(li).insertBefore(Element);//append before Element
					break;
			}
		}
	}
	else if(params.error=="true")
	{
		$.fancybox(
    		$('#error_same_task').html(),
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
        });

        $(document).on("click","#Ok",function(event) {
       		event.preventDefault();
       		$.fancybox.close();
    	});
	}
}

