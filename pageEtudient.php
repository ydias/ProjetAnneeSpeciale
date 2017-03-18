<!DOCTYPE html>
<html>
	<head>

		<title>Page Etudient</title>
		<meta charset="utf-8">			
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"/>
	  	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="pageEtudient.css">
	</head>
	<body>
		<div id="header">
        	<div class="container" style="display: inline;">
           		<img src="IUT-villetaneuse.png" alt="accueil"/>
           		<font size="7" style="position: absolute;right: 25px;top: 60px;">
                    DUT informatique année spéciale
                </font>
                <div class="row" id="identifient">
					<h4 class="col-lg-offset-10 col-lg-3">email@email.com</h4>
				</div>
        	</div>
    	</div>
		<div class="container">
			
			<div class="row">
				<h3>Information Général</h3>
			</div>
			<form class="col-lg-12">
				<br>
				<div class="row">
					<label class="col-lg-1">Nom</label>
					<input class="col-lg-2 col-lg-offset-1" type="text"/>
					<label class="col-lg-1 col-lg-offset-1">Prenom</label>
					<input class="col-lg-2 col-lg-offset-1"type="text"/>
				</div> <br/>
				<div class="row">
					<label class="col-lg-2">N° de sécurité Sociale</label>
					<input class="col-lg-2" type="text" />
				</div> <br/>
				<div class="row">
					<label class="col-lg-2">Situation familiale </label>
						<select class="col-lg-2">
							<option>vide</option>
							<option>Marié(e)</option>
							<option>Celibataire</option>
						</select>
						<label class="col-lg-2 col-lg-offset-1">Nombre d'enfants</label> 
						<input class="col-lg-1" type="number"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-1">Né(e) le</label>
					 <input class="col-lg-2 col-lg-offset-1" type="date"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-1">A</label>
					<input class="col-lg-2 col-lg-offset-1" type="text"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-1">Departement</label>
					<input class="col-lg-2 col-lg-offset-1" type="text"/>
					<label class="col-lg-1 col-lg-offset-1">ou pays</label>
					<input class="col-lg-2 col-lg-offset-1" type="text"/>
				</div><br/>	
				<div class="row">
					<label class="col-lg-1">Nationalité</label>
					<input class="col-lg-2 col-lg-offset-1" type="text"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-2">Adresse de la famille</label>
					<input class="col-lg-7" type="text"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-2">Adresse de l'année en cours (si differente de la famille)</label>
					<input class="col-lg-7" type="text"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-2">Telephone fixe</label>
					<input class="col-lg-2" type="tel"/>
					<label class="col-lg-2 col-lg-offset-1">Telephone Portable</label>
					<input class="col-lg-2" type="text"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-1">Bac :</label>
					<label class="col-lg-1">Année</label>
					<input class="col-lg-2" type="number"/>
					<label class="col-lg-1 col-lg-offset-1">Série</label>
					<input class="col-lg-2 col-lg-offset-1" type="text"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Dernier établissement secondaire fréquenté</label>
				</div>
				<div class="row">
					<label class="col-lg-1 col-lg-offset-1">Nom</label>
					<input class="col-lg-2" type="text"/>
					<label class="col-lg-1 col-lg-offset-1">Ville</label>
					<input class="col-lg-2 col-lg-offset-1" type="text"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Avez-vous fait une demande de bourse de l'Enseignement Supérieur ?</label>
					<label class="col-lg-1">OUI <input type="radio" name="demande" value="OUI"/></label>
					<label class="col-lg-1">NON <input type="radio" name="demande" value="NON"/></label>
				</div>
				<div class="row">
					<label class="col-lg-6">A-t-elle été accordée ?</label>
					<label class="col-lg-1">OUI <input type="radio" name="accordée" value="OUI"/></label>
					<label class="col-lg-1">NON <input type="radio" name="accordée" value="NON"/></label>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Dernier école fréquenté dans l'enseignement supérieur</label>
				</div><br/>
				<div class="row">
					<label class="col-lg-1 col-lg-offset-1">Nom</label>
					<input class="col-lg-2" type="text"/>
					<label class="col-lg-1 col-lg-offset-1">Ville</label>
					<input class="col-lg-2 col-lg-offset-1" type="text"/>
				</div> <br/>
				<div class="row">
					<label class="col-lg-2">Filière suivie</label>
					<input class="col-lg-2" type="text"/>			
				</div><br/>
				<div class="row">
					<label class="col-lg-2">Diplôme obtenu ou année validées</label>
					<input class="col-lg-2" type="text"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Avez-vous fait une demande dans un autre IUT</label>
				</div>
				<div class="row">
					<p class="col-lg-6">ou dans un autre département de l'IUT de Villetaneuse pour la rentrée universitaire ?</p>
					<label class="col-lg-1">OUI <input name="inscription" value="OUI" type="radio"></label>
					<label class="col-lg-1">NON <input name="inscription" value="NON" type="radio"></label>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">précisez la spécialité et l'établisement</label>
				</div>
				<div class="row">
					<label class="col-lg-2">Etablisement</label>
					<input class="col-lg-2" type="text">
					<label class="col-lg-2 col-lg-offset-1">Spécialité</label>
					<input class="col-lg-2" type="text">
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Comment avez-vous eu connaissance de notre formation ?</label>
				</div>
				<div class="row">
					<label class="col-lg-1"><input type="radio" name="connaissance" value="Lycée"/>Lycée</label>
					<label class="col-lg-2 col-lg-offset-1">Lequel ?</label>
					<input class="col-lg-2" type="text"/>
				</div>
				<div class="row">
					<label class="col-lg-1"><input type="radio" name="connaissance" value="Salon"/>Salon</label>
					<label class="col-lg-2 col-lg-offset-1">Lequel ?</label>
					<input class="col-lg-2" type="text"/>
				</div>
				<div class="row">
					<label class="col-lg-3"><input type="radio" name="connaissance" value="Ancien"/>Ancien étudient de l'IUT</label>
				</div>
				<div class="row">
					<label class="col-lg-1"><input type="radio" name="connaissance" value="Presse"/>Presse</label>
					<label class="col-lg-2 col-lg-offset-1">Quelle parution ?</label>
					<input class="col-lg-2" type="text"/>
				</div>
				<div class="row">
					<label class="col-lg-1"><input type="radio" name="connaissance" value="Internet"/>Internet</label>
					<label class="col-lg-2 col-lg-offset-1">Quel site ?</label>
					<input class="col-lg-2" type="text"/>
				</div>
				<div class="row">
					<label class="col-lg-1"><input type="radio" name="connaissance" value="Autres"/>autre(s)</label>
					<label class="col-lg-2 col-lg-offset-1">Préciser :</label>
					<input class="col-lg-2" type="text"/>
				</div><br/>		
				<div class="row">
					<h3>Pièce Jointe</h3>
				</div>
				<div class="row">
					<label class="col-lg-6">Lettre de Motivation, datée, justifiant votre candidature</label>
				</div>
				<div class="row">
					<input class="col-lg-4" type="file"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">CV</label>
				</div>
				<div class="row">
					<input class="col-lg-4" type="file"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Photo d'identité</label>
				</div>
				<div class="row">
					<input class="col-lg-4" type="file"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Photocopie des bulletins trimestriels ou semestriels de vos classes de première et terminal(y compris ceux des classe redoublées)</label>
				</div>
				<div class="row">
					<input class="col-lg-4" type="file"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Photocopies des notes du baccalauréat ou équivalent</label>
					<label class="col-lg-6">Photocopies du diplome du baccalauréat</label>
				</div>
				<div class="row">
					<input class="col-lg-4" type="file"/>
					<input class="col-lg-4 col-lg-offset-2" type="file"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Pièces justifiant l'activité après le baccalauréat(relevé de notes, certificat de scolarité, photocopie de la carte d'étudient, attestation patronale, certificat de présence au corps,etc..)</label>
				</div>
				<div class="row">
					<input class="col-lg-4" type="file"/>
				</div><br/>

				<input class="col-lg-offset-9" type="submit" value="actualiser">
			</form>
		</div>
		
	</body>
</html>