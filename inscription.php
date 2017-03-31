<!DOCTYPE html>
<html>
	<head>

		<title>Inscription</title>
		<meta charset="utf-8">			
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"/>
	  	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="pageEtudient.css">
		<script src="inscription.js"></script>
	</head>
	<body>
<header>

    <div id="header">
        <div class="container" style="display: inline;">
           <img src="IUT-villetaneuse.png" alt="accueil"class="col-lg-2"/>
            <font size="7" class="col-lg-8 col-lg-offset-2">
                    DUT informatique année spéciale
                </font>
        </div>
    </div>
    <div class="row" id="identifient">
        <br/><br/>
    </div>

</header>
		
		<div class="container">
			
			<div class="row">
				<h3>Formulaire d'insciption</h3>
			</div>
			<form action="envoieEmail.php" method="post">
				<br>
				<div class="row">
					<label class="col-lg-1">Email</label>
					<input class="col-lg-2 col-lg-offset-1" type="mail" name="mail">
				</div><br/>
				<div class="row">
					<label class="col-lg-1">Nom</label>
					<input class="col-lg-2 col-lg-offset-1" type="text" name="nom"/>
					<label class="col-lg-1 col-lg-offset-1">Prenom(s)</label>
					<input class="col-lg-2 col-lg-offset-1"type="text" name="prenom"/>
				</div> <br/>
				<div class="row">
					<label class="col-lg-2">N° de sécurité Sociale</label>
					<input class="col-lg-2" type="text" name="securiteSociale" />
				</div> <br/>
				<div class="row">
					<label class="col-lg-2">Situation familiale </label>
						<select class="col-lg-2" name="situationFamiliale">
							<option value="celibataire" >Celibataire</option>
							<option value="marie">Marie</option>
						</select>
						<label class="col-lg-2 col-lg-offset-1">Nombre d'enfants</label> 
						<input class="col-lg-1" type="number" name="nbEnfants"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-1">Né(e) le</label>
					 <input class="col-lg-2 col-lg-offset-1" name="dateNaissance" type="date"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-1">A</label>
					<input class="col-lg-2 col-lg-offset-1" name="villeNaissance" type="text"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-1" id='affichageDepartement'>Departement</label>
					<input class="col-lg-2 col-lg-offset-1" id='departement' type="text" name="departement"/>
					<label class="col-lg-1 col-lg-offset-1" id='affichagePays'>ou pays</label>
					<input class="col-lg-2 col-lg-offset-1" id='pays' type="text" name="pays"/>
				</div><br/>	
				<div class="row">
					<label class="col-lg-1">Nationalité</label>
					<input class="col-lg-2 col-lg-offset-1" type="text" name="nationalité"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-2">Adresse de la famille</label>
					<input class="col-lg-7" type="text" name="adresse"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-2">Adresse de l'année en cours (si differente de la famille)</label>
					<input class="col-lg-7" type="text" name="adresse2"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-2">Telephone fixe</label>
					<input class="col-lg-2" type="tel" name="telFixe" />
					<label class="col-lg-2 col-lg-offset-1">Telephone Portable</label>
					<input class="col-lg-2" type="tel" name="telPort"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-1">Bac :</label>
					<label class="col-lg-1">Année</label>
					<input class="col-lg-2" type="number" name="AnnéeBac"/>
					<label class="col-lg-1 col-lg-offset-1">Série</label>
					<input class="col-lg-2 col-lg-offset-1" type="text" name="serieBac"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Dernier établissement secondaire fréquenté</label>
				</div>
				<div class="row">
					<label class="col-lg-1 col-lg-offset-1">Nom</label>
					<input class="col-lg-2" type="text" name="NomDernierEtablissementSecondaire"/>
					<label class="col-lg-1 col-lg-offset-1">Ville</label>
					<input class="col-lg-2 col-lg-offset-1" type="text" name="VilleDernierEtablissementSecondaire"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Avez-vous fait une demande de bourse de l'Enseignement Supérieur ?</label>
					<label class="col-lg-1">OUI <input type="radio" name="demande" value="oui"/></label>
					<label class="col-lg-1">NON <input type="radio" name="demande" value="non"/></label>
				</div>
				<div class="row">
					<label class="col-lg-6">A-t-elle été accordée ?</label>
					<label class="col-lg-1">OUI <input type="radio" name="accordée" value="oui"/></label>
					<label class="col-lg-1">NON <input type="radio" name="accordée" value="non"/></label>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Dernier école fréquenté dans l'enseignement supérieur</label>
				</div><br/>
				<div class="row">
					<label class="col-lg-1 col-lg-offset-1">Nom</label>
					<input class="col-lg-2" type="text"  name="NomDernierEtablissement"/>
					<label class="col-lg-1 col-lg-offset-1">Ville</label>
					<input class="col-lg-2 col-lg-offset-1" type="text" name="VilleDernierEtablissement"/>
				</div> <br/>
				<div class="row">
					<label class="col-lg-2">Filière suivie</label>
					<input class="col-lg-2" type="text" name="filiere" />			
				</div><br/>
				<div class="row">
					<label class="col-lg-2">Diplôme obtenu ou année validées</label>
					<input class="col-lg-2" type="text" name="diplomeAnnee"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Avez-vous fait une demande dans un autre IUT</label>
				</div>
				<div class="row">
					<p class="col-lg-6">ou dans un autre département de l'IUT de Villetaneuse pour la rentrée universitaire ?</p>
					<label class="col-lg-1">OUI <input name="inscription" value="oui" type="radio"></label>
					<label class="col-lg-1">NON <input name="inscription" value="non" type="radio"></label>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">précisez la spécialité et l'établisement</label>
				</div>
				<div class="row">
					<label class="col-lg-2">Etablissement</label>
					<input class="col-lg-2" type="text" name="AutreEtablissement1" />
					<label class="col-lg-2 col-lg-offset-1">Spécialité</label>
					<input class="col-lg-2" type="text" name="AutreSpe1">
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Comment avez-vous eu connaissance de notre formation ?</label>
				</div>
				<div class="row">
					<label class="col-lg-2"id='lycee'><input  type="radio" name="connaissance" value="lycee"/>Lycée</label>
					
				</div>
				<div class="row">
					<label class="col-lg-2"id='salon'><input  type="radio" name="connaissance" value="salon"/>Salon</label>
					
				</div>
				<div class="row">
					<label class="col-lg-3"id='ancien'><input  type="radio" name="connaissance" value="ancien_etudiant_iut"/>Ancien étudient de l'IUT</label>
				</div>
				<div class="row">
					<label class="col-lg-2"id='presse'><input  type="radio" name="connaissance" value="presse"/>Presse</label>
					
				</div>
				<div class="row">
					<label class="col-lg-2"id='internet'><input  type="radio" name="connaissance" value="internet"/>Internet</label>
					
				</div>
				<div class="row">
					<label class="col-lg-2"id='autre'><input  type="radio" name="connaissance" value="autre"/>autre(s)</label>
					

				</div><br/>	
				<input class="col-lg-2 col-lg-offset-5" type="submit" value="s'inscrire"/>
	</form>
		</div>
		
	</body>
</html>