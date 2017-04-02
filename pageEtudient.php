<!DOCTYPE html>
		<?php 
			require_once('BDD/connexionbdd.php'); 
			session_start();
			$_SESSION['utilisateur']='etudient';
			$_SESSION['email']='rothclementine@gmail.com';
			$_SESSION['mdp']='b7793c4b';
			$grainDeSel = "8YzlCAydpEK821BgBNNP";
			$mdp_crypte = sha1($_SESSION['mdp']. $grainDeSel);
			if (!isset($_SESSION['utilisateur'])||$_SESSION['utilisateur']=='admin') {
				echo'<meta http-equiv="refresh" content="0; URL=admin.php"/>' ;
			}elseif (!isset($_SESSION['utilisateur'])||$_SESSION['utilisateur']!='etudient') {
				echo'<meta http-equiv="refresh" content="0; URL=accueil.php"/>' ;
			}
			$mail=$_SESSION['email'];
			$donne=$db->prepare('SELECT * FROM etudiant WHERE email=:mail AND mdp=:mdp');
			$donne->bindValue(':mail',$mail);
			$donne->bindValue(':mdp',$mdp_crypte);
			$donne->execute();
			$tab=$donne->fetch(PDO::FETCH_ASSOC);

		 ?>

<html>

	<head>
		
		<title>Page Etudient</title>
		<meta charset="utf-8">			
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"/>
	  	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="Fct_PageEtudiant/pageEtudient.css">
		<script src='Fct_PageEtudiant/pageEtudient.js'></script>
	</head>
	<body>
		<header>

    		<div id="header">
        	<div class="container" style="display: inline;">
           		<img src="Image/IUT-villetaneuse.png" alt="accueil"class="col-lg-2"/>
            	<font size="7" class="col-lg-8 col-lg-offset-2">
                    DUT informatique année spéciale
                </font>
        	</div>
    		</div>
    		<div class="row" id="identifient">
       			<?php echo '<h4 class="col-lg-offset-5 col-lg-2"> nom :'. $tab['prenom'].' </h4><h4 class="col-lg-2"> prenom :'. $tab['nom'].' </h4><h4 class="col-lg-3"> email :'. $tab['email'].' </h4>'?>
   			</div>
		</header>
		<div class="container">
			
			<div class="row">

				<h3>Information Général</h3>
			</div>
			<form action="Fct_PageEtudiant/actualisation.php" method="post" enctype="multipart/form-data">
				<br/>
				<div class="row">
					<label class="col-lg-2">N° de sécurité Sociale</label>
					<?php echo "<input class='col-lg-2' name='securiteSociale' type='text'value=".$tab['numero_securite_sociale']." />";?>
				</div> <br/>
				<div class="row">
					<div class="row">
					<label class="col-lg-2">Situation familiale </label>
						<?php 
						if ($tab['situation_familiale']=="marie") {
							echo " <select class='col-lg-2' name='situationFamiliale'>";
							echo "<option value='celibataire' >Celibataire</option>";
							echo "<option value='marie' selected >Marie</option>";
						echo "</select>";
						}else{
						echo " <select class='col-lg-2' name='situationFamiliale'>";
							echo "<option value='celibataire' selected>Celibataire</option>";
							echo "<option value='marie'>Marie</option>";
						echo "</select>";
						}
						?>
						
						<label class="col-lg-2 col-lg-offset-1">Nombre d'enfants</label> 
						<?php  echo '<input class="col-lg-1" type="number" name="nbEnfants" value="'.$tab['nombre_enfants'].'"/>';?>
				</div><br/>
				<div class="row">
					<label class="col-lg-1">Né(e) le</label>
					<?php echo ' <input class="col-lg-2 col-lg-offset-1" name="dateNaissance" value="'.$tab['date_naissance'].'" type="date"/>'; ?>
				</div><br/>
				<div class="row">
					<label class="col-lg-1">A</label>
					<?php echo'  <input class="col-lg-2 col-lg-offset-1" name="villeNaissance" value="'.$tab['lieu_naissance'].'" type="text"/>';?>
				</div><br/>
				<div class="row">
					<?php 
						if (trim($tab['departement'])!='') {
							echo '<label class="col-lg-1" id="affichageDepartement">Departement</label>';
							echo '<input class="col-lg-2 col-lg-offset-1" id="departement" value="'.$tab['departement'].'" type="text" name="departement"/>'; 
							echo '<label class="col-lg-1 col-lg-offset-1" style="display:none;" id="affichagePays">ou pays</label>' ;
							echo '<input class="col-lg-2 col-lg-offset-1" id="pays" style="display:none;" type="text" name="pays"/>';
						}elseif(trim($tab['pays'])!=''){
							echo '<label class="col-lg-1" style="display:none;" id="affichageDepartement">Departement</label>';
							echo '<input class="col-lg-2 col-lg-offset-1" style="display:none;" id="departement"  type="text" name="departement"/>'; 
							echo '<label class="col-lg-1 col-lg-offset-1" class="col-lg-offset-5" id="affichagePays">ou pays</label>' ;
							echo '<input class="col-lg-2 col-lg-offset-1" id="pays" value="'.$tab['pays'].'" type="text" name="pays"/>';
						}
						
					
					
					?>
				</div><br/>	
				<div class="row">
					<label class="col-lg-1">Nationalité</label>
					<?php echo ' <input class="col-lg-2 col-lg-offset-1" value="'.$tab['nationalite'].'" type="text" name="nationalité"/> ' ;?>
				</div><br/>
				<div class="row">
					<label class="col-lg-2">Adresse de la famille</label>
					<?php echo ' <input class="col-lg-7" value="'.$tab['adresse_famille'].'" type="text" name="adresse"/> ' ;?>
				</div><br/>
				<div class="row">
					<label class="col-lg-2">Adresse de l'année en cours (si differente de la famille)</label>
					<?php 
						if ($tab['adresse_annee_en_cours']!='none') {
							echo '<input class="col-lg-7" type="text" value="'.$tab['adresse_annee_en_cours'].'" name="adresse2"/> ' ;
						}else{
							echo '<input class="col-lg-7" type="text" name="adresse2"/> ' ;
						}
						
					?>
				</div><br/>
				<div class="row">
					<label class="col-lg-2">Telephone fixe</label>
					<?php echo '<input class="col-lg-2" type="tel" value="'.$tab['telephone_personnel'].'" name="telFixe" />' ; ?>
					<label class="col-lg-2 col-lg-offset-1">Telephone Portable</label>
					<?php echo '<input class="col-lg-2" type="tel" value="'.$tab['telephone_portable'].'" name="telPort"/>' ; ?>
				</div><br/>
				<div class="row">
					<label class="col-lg-1">Bac :</label>
					<label class="col-lg-1">Année</label>
					<?php echo '<input class="col-lg-2" value="'.$tab['annee_bac'].'" type="number" name="AnnéeBac"/>' ; ?>
					<label class="col-lg-1 col-lg-offset-1">Série</label>
					<?php echo '<input class="col-lg-2 col-lg-offset-1" value="'.$tab['serie_bac'].'" type="text" name="serieBac"/>' ; ?>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Dernier établissement secondaire fréquenté</label>
				</div>
				<div class="row">
					<label class="col-lg-1 col-lg-offset-1">Nom</label>
					<?php echo '<input class="col-lg-2" value="'.$tab['dernier_etablissement_secondaire_frequente_nom'].'" type="text" name="NomDernierEtablissementSecondaire"/>' ; ?>
					<label class="col-lg-1 col-lg-offset-1">Ville</label>
					<?php echo '<input value="'.$tab['dernier_etablissement_secondaire_frequente_ville'].'" class="col-lg-2 col-lg-offset-1" type="text" name="VilleDernierEtablissementSecondaire"/>' ; ?>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Avez-vous fait une demande de bourse de l'Enseignement Supérieur ?</label>
					<?php 
						if ($tab['demande_bourse']=='non') {
							echo '<label class="col-lg-1">OUI <input type="radio" name="demande" value="oui"  /></label>' ;
							echo '<label class="col-lg-1">NON <input type="radio" selected name="demande" checked value="non"/></label>' ;
						} else{
							echo '<label class="col-lg-1">OUI <input type="radio" name="demande" checked value="oui"/></label>' ;
							echo '<label class="col-lg-1">NON <input type="radio" name="demande" value="non"/></label>' ;		
						}
					?>
					
					
				</div>
				<div class="row">
					<label class="col-lg-6">A-t-elle été accordée ?</label>
					<?php 
						if ($tab['demande_bourse_accordee']=='non') {
							echo '<label class="col-lg-1">OUI <input type="radio" name="accordée" value="oui"/></label>' ;
							echo '<label class="col-lg-1">NON <input type="radio" name="accordée" checked value="non"/></label>' ;			
						}else{
							echo '<label class="col-lg-1">OUI <input type="radio" name="accordée" checked value="oui"/></label>' ;
							echo '<label class="col-lg-1">NON <input type="radio" name="accordée" value="non"/></label>' ;			
						}
						
					?>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Dernier école fréquenté dans l'enseignement supérieur</label>
				</div><br/>
				<div class="row">
					<label class="col-lg-1 col-lg-offset-1">Nom</label>
					<?php echo ' <input class="col-lg-2" value="'.$tab['derniere_ecole_frequentee_ens_sup_nom'].'" type="text"  name="NomDernierEtablissement"/>' ; ?>
					<label class="col-lg-1 col-lg-offset-1">Ville</label>
					<?php echo '<input class="col-lg-2 col-lg-offset-1" value="'.$tab['derniere_ecole_frequentee_ens_sup_ville'].'" type="text" name="VilleDernierEtablissement"/>' ; ?>
				</div> <br/>
				<div class="row">
					<label class="col-lg-2">Filière suivie</label>
					<?php echo '<input class="col-lg-2" value="'.$tab['filiere_suivie'].'" type="text" name="filiere" />' ; ?>
				</div><br/>
				<div class="row">
					<label class="col-lg-2">Diplôme obtenu ou année validées</label>
					<?php echo '<input class="col-lg-2" type="text" value="'.$tab['diplome_obtenu_annee_validees'].'" name="diplomeAnnee"/>' ; ?>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Avez-vous fait une demande dans un autre IUT</label>
				</div>
				<div class="row">
					<p class="col-lg-6">ou dans un autre département de l'IUT de Villetaneuse pour la rentrée universitaire ?</p>
					<?php
					if ($tab['demande_autre_iut_autre_departement']=='non') {
					 	echo '<label class="col-lg-1">OUI <input name="inscription" value="oui" type="radio"></label>'; 
						echo '<label class="col-lg-1">NON <input name="inscription" checked value="non" type="radio"></label>' ;
					 } else{
					 	echo '<label class="col-lg-1">OUI <input name="inscription" value="oui" checked type="radio"></label>'; 
						echo '<label class="col-lg-1">NON <input name="inscription" value="non" type="radio"></label>' ;
					 }
						
					?>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">précisez la spécialité et l'établisement</label>
				</div>
				<div class="row">
					<label class="col-lg-2">Etablissement</label>
					<?php
						if ($tab['nom_etablissement_1']!='none') {
							echo '<input class="col-lg-2" value="'.$tab['nom_etablissement_1'].'" type="text" name="AutreEtablissement1" />' ; 
						}else{
							echo '<input class="col-lg-2" type="text" name="AutreEtablissement1" />' ;
						}
					 ?>
					<label class="col-lg-2 col-lg-offset-1">Spécialité</label>
					<?php
						if ($tab['specialite_etablissement_1']!="none") {
							echo '<input class="col-lg-2" type="text" value="'.$tab['specialite_etablissement_1'].'" name="AutreSpe1">' ;
						}else{
							echo '<input class="col-lg-2" type="text" name="AutreSpe1">' ;
						}	
					?>
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
				<div class="row">
					<h3>Pièce Jointe</h3>
				</div>
				<div class="row">
					<label class="col-lg-6" >Lettre de Motivation, datée, justifiant votre candidature</label>
				</div>
				<div class="row">
					<input class="col-lg-4" name="lettreDeMotivation" type="file"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">CV</label>
				</div>
				<div class="row">
					<input class="col-lg-4" name="CV" type="file"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Photo d'identité</label>
				</div>
				<div class="row">
					<input class="col-lg-4" name="photoIdentité" type="file"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Photocopie des bulletins trimestriels ou semestriels de vos classes de première et terminal(y compris ceux des classe redoublées)</label>
				</div>
				<div class="row">
					<input class="col-lg-4" name="photocopieBulletinTerminal" type="file"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Photocopies des notes du baccalauréat ou équivalent</label>
					<label class="col-lg-6">Photocopies du diplome du baccalauréat</label>
				</div>
				<div class="row">
					<input class="col-lg-4" name="photocopieNoteBac" type="file"/>
					<input class="col-lg-4 col-lg-offset-2" name="photocopieDiplomeBac" type="file"/>
				</div><br/>
				<div class="row">
					<label class="col-lg-6">Pièces justifiant l'activité après le baccalauréat(relevé de notes, certificat de scolarité, photocopie de la carte d'étudient, attestation patronale, certificat de présence au corps,etc..)</label>
				</div>
				<div class="row">
					<input class="col-lg-4" name="justificatif" type="file"/>
				</div><br/>

				<input class="col-lg-offset-9" type="submit" value="actualiser">
			</form>
		</div>
		
	</body>
</html>