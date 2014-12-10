
function KonamiCode(){
		$('#add-task').after('<section class="content wrap"><div id="coloumn-left"><div class="filter-date"></div><div class="filter-category"><span class="title">Catégorie</span><h2 class="all active"><a href="">Tout</a></h2></div></div><div id="coloumn-right"></div></section>');
	for (var i = 0; i < $('header.titre').length; i++) {
		$('#coloumn-left .filter-category').append('<h2><a href="">'+$('header.titre').eq(i).find('h2').text()+'</a></2>');
	};
		$('#coloumn-right').html('<div id="contener">'+$('#contener').html()+'</div>');

		return true;
}