/*var Task=function(params){
	this.id=params.id;
	this.idCategory = params.idCategory;
	this.content = params.content;
	this.dateEnd = params.dateEnd;
	this.endType = params.endType;
	this.status = params.status;
	
	addTask(params);
}*/
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
	if(params!="empty")
	{
		//Mise de l'id de l'élément dans une variable
		var id=params.id_task;
		//Mise de la position à ajouter, dans une variable
		var position=params.last_id;
		//Mise de l'id de la catégorie ou se trouve la tache dans une variable
		var idCat=params.category;
		var endType=params.end_type_date;
		var date=null;
		var content=params.content;
		var Element=null;
		var parentContainer=$("#sortable li[data-id_cat=\""+idCat+"\"]");	
		var li = document.createElement("li");
		
		$(li).text(content);
		$(li).attr("data-id_task", id);  
		$(li).append( "<i class=\"fa fa-check btnCheck\"></i>" );
		$(li).append("<i id=\"btnDeleteI\" class=\"fa fa-trash btnDelete\"></i>");
		if(position==0)
		{
			var ul = document.createElement("ul");
			$(ul).append(li);
			parentContainer.append( $(ul) );
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
}

