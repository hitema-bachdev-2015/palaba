
function KonamiCode(){
	$('#add-task').hide();
	$('div.add-cat').hide();
		$('#add-task').after('<header id="control"><div class="wrap"><span id="logo"></span><span class="tab active">taches</span><span class="tab">ajouter</span><span class="tab">parametres</span><a href="" class="profil"><span class="img-profil"><img src="img/obama.jpg"></span><span class="name">Barack OBAMA</span></a></div></header><section class="content wrap"><div id="coloumn-left"><div class="filter-date"><h2 class="active"><a href="">Avant la fin du monde</a></h2><h2 class="small"><a href="">Au plus tôt</a></h2><h2 class="small"><a href="">Semaine</a></h2><h2 class="small"><a href="">Ce mois-ci</a></h2><h2 class="small"><a href="">Cette année</a></h2></div><div class="filter-category"><span class="title">Catégorie</span><h2 class="all active"><a href="">Tout</a></h2></div></div><div id="coloumn-right"></div></section>');
	for (var i = 0; i < $('header.titre').length; i++) {
		$('#coloumn-left .filter-category').append('<h2><a href="">'+$('header.titre').eq(i).find('h2').text()+'</a></2>');
	};
	var toto = $('#contener').html();
		$('#contener').remove();
		$('#coloumn-right').html('<div id="contener">'+toto+'</div>');
		$('footer').remove();
		return true;
}
