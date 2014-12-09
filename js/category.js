var Category=function(params){
	this.id=params.id;
/*this.name = params.name;
this.position = params.position;*/

}

Category.prototype.displayCat=function(){
    var content; 
    $.ajax({

        url: "ajax/affichage.php",
        type: "POST",
        dataType : "html",
        success : function(data){
          content = JSON.parse(data);
          var theId;
          var theName;
          for(var $i=0; $i<content.length ; $i++ ){
            theId = content[$i]["id"];
            theName = content[$i]["name"];
            $("#sortable").append("<li data-id_cat='"+theId+"'><header><h2 class='titre'>"+theName+"</h2><i data-id_cat='"+theId+"'>s</i></header></li>");
          }
        }
      });
}

Category.prototype.moveCat=function(){
    $( "#sortable" ).sortable({
    	placeholder: "element_modif",
    	handle: ".titre",
    	revert: true,
    	update: function(){
    		 $(" #sortable li").each(function(){
          console.log($(this));
    		 	var myId = $(this)[0].attributes[0].value;
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
}

Category.prototype.addTask=function(idCat){
	//debugger;
	$.ajax({
				url : 'ajax/showTasks.php',
				type : 'POST',
				data: {
						IDCAT:idCat,
					},
       			success : function(data){ // code_html contient le HTML renvoy�
       			 alert(data);
       			}
   			});
}