//datepicker
$(document).ready(function() {
  	$("#datepicker").datepicker();
  	$("#datepicker").hide();
  	$("#forKeyup").hide();

	$("select#end_select").change(function(){
		var selected = $("#end_select option:selected").val();
		if(selected == 2){
			$("#datepicker").show();
		}else if(selected != 2){
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
});

