$(document).ready(function(){
	console.log("Le document est prêt");
	console.log('les input sont caché');
	$('#departement').change(function(){
		console.log('la valeur de departement a changé');
		if ($('#departement').val()!='') {
			console.log('input pays caché');
			$('#pays').hide();
			$('#affichagePays').hide();
		}else{
			console.log('input pays affiché');
			$('#pays').show();
			$('#affichagePays').show();
		}
	});

	$('#pays').change(function(){
		console.log('la valeur de departement a changé');
		if ($('#pays').val()!='') {
			console.log('input departement caché');
			$('#departement').hide();
			$('#affichageDepartement').hide();
			$('#affichagePays').addClass('col-lg-offset-5')
		}else{
			console.log('input departement affiché');
			$('#departement').show();
			$('#affichageDepartement').show();
			$('#affichagePays').removeClass('col-lg-offset-5')
		};
	});
	$('#lycee').change(function(){
		console.log('lycee selectionne');
		$("#inputLycee1").toggle();
		$("#inputLycee").toggle();
		$("#inputSalon1").hide();
		$("#inputSalon").hide();
		$("#inputPresse1").hide();
		$("#inputPresse").hide();
		$("#inputInternet1").hide();
		$("#inputInternet").hide();
		$("#inputautre1").hide();
		$("#inputautre").hide();
	});

	$('#salon').change(function(){
		console.log('salon selectionne');
		$("#inputLycee1").hide();
		$("#inputLycee").hide();
		$("#inputSalon1").toggle();
		$("#inputSalon").toggle();
		$("#inputPresse1").hide();
		$("#inputPresse").hide();
		$("#inputInternet1").hide();
		$("#inputInternet").hide();
		$("#inputautre1").hide();
		$("#inputautre").hide();
	});

	$('#ancien').change(function(){
		console.log('ancien selectionne');
		$("#inputLycee1").hide();
		$("#inputLycee").hide();
		$("#inputSalon1").hide();
		$("#inputSalon").hide();
		$("#inputPresse1").hide();
		$("#inputPresse").hide();
		$("#inputInternet1").hide();
		$("#inputInternet").hide();
		$("#inputautre1").hide();
		$("#inputautre").hide();
	});

	$('#presse').change(function(){
		console.log('presse selectionne');
		$("#inputLycee1").hide();
		$("#inputLycee").hide();
		$("#inputSalon1").hide();
		$("#inputSalon").hide();
		$("#inputPresse1").toggle();
		$("#inputPresse").toggle();
		$("#inputInternet1").hide();
		$("#inputInternet").hide();
		$("#inputautre1").hide();
		$("#inputautre").hide();
	});

	$('#internet').change(function(){
		console.log('internet selectionne');
		$("#inputLycee1").hide();
		$("#inputLycee").hide();
		$("#inputSalon1").hide();
		$("#inputSalon").hide();
		$("#inputPresse1").hide();
		$("#inputPresse").hide();
		$("#inputInternet1").toggle();
		$("#inputInternet").toggle();
		$("#inputautre1").hide();
		$("#inputautre").hide();
	});

	$('#autre').change(function(){
		console.log('autre selectionne');
		$("#inputLycee1").hide();
		$("#inputLycee").hide();
		$("#inputSalon1").hide();
		$("#inputSalon").hide();
		$("#inputPresse1").hide();
		$("#inputPresse").hide();
		$("#inputInternet1").hide();
		$("#inputInternet").hide();
		$("#inputautre1").toggle();
		$("#inputautre").toggle();
	});
	console.log("La mise en place est finie. En attente d'événements...");
});