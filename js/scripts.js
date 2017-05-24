/* Début Google Analytics */
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-39176170-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
/* Fin Google Analytics */

//Récupération hauteur et largeur de la fenêtre
function getClientWidth(){	
	return (document.documentElement && document.documentElement.clientWidth) || window.innerWidth || self.innerWidth || document.body.clientWidth;
}

function getClientHeight(){	
		return (document.documentElement && document.documentElement.clientHeight) || window.innerHeight || self.innerHeight || document.body.clientHeight;
}   




/* Ajouter la div qui contient le background*/
function AjoutBackground(){
	$('body').append('<div class="bkgBody"></div>');
}


/* Ajouter les div visuels*/
function AjoutDiv(){

	/* Mettre test de taille */
	if(getClientWidth() > 765 && ($('.paraDroite').length < 1) ){
		$('article.deco').append('<div class="paraGauche"></div>');
		$('article.deco').append('<div class="paraDroite"></div>');
	}else {
		$('.paraDroite, .paraGauche').remove();
	}
}




/* Supprimer les lien vers le téléphone si le site est consulté depuis autre chose qu'un mobile */
function supprMobile(){

	if(getClientWidth() > 765 ){
		$('a[href^="tel:"]').each(function( index ) {
		    $(this).after($( this ).text());
		    $(this).remove();
		}); 
	}


}






$(document).ready(function () {
	AjoutBackground();
	supprMobile();
	// AjoutDiv();
});


$(window).resize(function() {
	// AjoutDiv();
});
