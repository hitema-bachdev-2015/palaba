var Category=function(params){
	this.id=params.id;
/*this.name = params.name;
this.position = params.position;*/

}

Category.prototype.moveCat=function(){
    $( "#sortable" ).sortable({
    	placeholder: "element_modif",
    	handle: ".moveCat",
    	// revert: true,
    	update: function(){
    		 $(" #sortable li").each(function(){
          var myId = $(this).attr('data-id_cat');
    		 	var myIndex = $(this).index();
		    	$.ajax({
				  url: "ajax/moveCat.php",
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
				url : 'ajax/showTask.php',
				type : 'POST',
				data: {
						IDCAT:idCat,
					},
       			success : function(data){ // code_html contient le HTML renvoyé
       			 alert(data);
       			}
   			});
}