var nbElemPage = 10;							/*variables nécessaires au changement de pages*/
var page_actuel = 1;
var nbLignes = $(".action").size();
var nbPages = Math.ceil(nbLignes/nbElemPage);

for(var x = 0; x < nbElemPage; x++)				/*affiche les élements de la première page*/
 {
 	$('.action').eq(x).addClass('affiche');
 }


function 	actualiserChangementPage()
{
  console.log('changement de page actualisé');

  $('.page span').each(function(){$(this).text('')});

  $('.page span').eq(0).text('1');

  if(nbPages > 1)
    $('.page span').eq(6).text(' ' + nbPages);

  if(page_actuel > 3)										/*si la page actuel est a plus d'une case d'écart de la premiere*/
  	$('.page span').eq(1).text(' ...');						/*alors on ajoute '...' juste a coté du 1*/

  if(page_actuel < (nbPages - 2))							/*si la page actuel est a plus d'une case d'écart de la derniere*/
  	$('.page span').eq(5).text(' ...');						/*alors on ajoute '...' juste a coté de la valeur de la derniere page*/

  if(page_actuel > 1 && page_actuel < nbPages)
  	$('.page span').eq(3).text(' ' + page_actuel);					

  if(page_actuel < (nbPages - 1))										
  	$('.page span').eq(4).text(' ' + (page_actuel + 1));

  if(page_actuel > 2)										
  	$('.page span').eq(2).text(' ' + (page_actuel - 1));
}


 actualiserChangementPage();

$(document).ready(function()
{
 console.log('début du JS');
 $('.page span').click(function(){			/*L'utilisateur clique sur un numéros de page*/
 if($(this).text() != ' ...')
  {
 	$('.page span').removeClass('page_actuel');
 	$('.action').removeClass('affiche');           /*Cache tout les elements de l'historique*/
 	$(this).addClass('page_actuel');
 	page_actuel = parseInt($(this).text());
 	for(var x = 0; x < nbElemPage; x++)			/*Affiche les elements en fonction du numéro de page actuel*/
 	{
 		$('.action').eq(((parseInt($(this).text())-1) * nbElemPage) + x).addClass('affiche');
 	}
 	actualiserChangementPage();
  }
 });
});

/* */