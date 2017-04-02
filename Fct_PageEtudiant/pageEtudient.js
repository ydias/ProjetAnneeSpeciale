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
	var k=0;
	$('#lycee').click(function(){
		console.log('lycee selectionne');
		if (k==0) {
			var i = $('<label class="col-lg-2" id="inputLycee1">Lequel ?</label><input class="col-lg-2"  class="inputLycee" type="text" name="connaissanceSalon"/>');
			$('#lycee').parent().append(i);
			k=1;
		}else{};
	});
	var l=0;
	$('#salon').click(function(){
		console.log('salon selectionne');
		if (l==0) {
			var j = $('<label class="col-lg-2" class="inputSalon">Lequel ?</label><input class="col-lg-2"  class="inputSalon" type="text" name="connaissanceSalon"/>');
			$('#salon').parent().append(j);
			l=1;
		}else{};
	});
	var m=0;
	$('#presse').click(function(){
		console.log('presse selectionne');
		if (m==0) {
			var s = $('<label class="col-lg-2" class="inputPresse">Quelle parution ?</label><input class="col-lg-2" class="inputPresse" type="text" name="connaissancePresse"/>');
			$('#presse').parent().append(s);
			m=1;
		}else{};
	});
	var n=0;
	$('#internet').click(function(){
		console.log('internet selectionne');
		if (n==0) {
			var r = $('<label class="col-lg-2"class="inputInternet">Quel site ?</label><input class="col-lg-2"class=inputInternet" type="text" name="connaissanceInternet"/>');
			$('#internet').parent().append(r);
			n=1;
		}else{};
	});
	
	var t=0;
	$('#autre').click(function(){
		console.log('autre selectionne');
		if (t==0) {
			var u = $('<label class="col-lg-2"class="inputautre">Préciser :</label><input class="col-lg-2" type="text" class="inputautre" name="connaissanceAutres"/>');
			$('#autre').parent().append(u);
			t=1;
		}else{};
	});
	console.log("La mise en place est finie. En attente d'événements...");
});