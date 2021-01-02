$(document).ready(function(){
	
	$('.formulaire').submit(function(){

		var oui = $('.souhait').val();
		//var nonsouhait=$('nonsouhait').val();
		$.post('affich.php',{oui:oui},function(affichage){
			$('.afficher').html(affichage);
		});
		return false;
	});





});