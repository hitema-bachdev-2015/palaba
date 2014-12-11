var Category=function(){

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
Category.prototype.addCat=function(){

}