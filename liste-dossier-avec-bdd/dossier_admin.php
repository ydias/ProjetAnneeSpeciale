<?php
include_once("connection.php");

$sql="SELECT * FROM `etudiant` where id='".$_POST['id']."'" ;
$res=mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);

function affiche($cible){	//permet d'afficher les accents
	echo utf8_encode($cible);
	}
?>

<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<html>



<head>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/jqc-1.12.4/dt-1.10.13/datatables.min.css"/>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<title>Dossier de <?php affiche($row['prenom'].' '.$row['nom']); ?> </title>
</head>


<body>



<!-- Navbar -->
<header>
    <!-- HEADER -->
    <div id="header">
        <div class="container" style="display: inline;">
           <img src="IUT-villetaneuse.png" alt="accueil"/> <font size='6' style="position: absolute;right: 25px;top: 60px;">
                    DUT informatique année spéciale
                </font>
        </div>
    </div>
</header>
<div id="navbar">
    <nav class="navbar navbar-static-top navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#dashboard">
                        Modifications récentes
                    </a>
                </li>
                <li class="active">
                    <a href="liste_dossiers.php">
                        Liste des candidats
                    </a>
                </li>
                <li>
                    <a href="liste_admins.php">
                        Gestion des admins
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Fin navbar -->









<h3>Détails du dossier de : <?php affiche($row['prenom'].' '.$row['nom']); ?></h4>
<a href="index.php">Retour a la liste des dossiers </a>

<div class="container">
			
			
			<div class="row">
				<h3>Informations Générales</h3>
			</div>	
				<br>

				<div class="row">
					<label class="col-lg-2">Nom:</label>
					<p class="col-lg-6" id="nom_etudiant"> <?php  affiche($row['nom']);  ?> </p>
				</div> 
				<div class="row">
					<label class="col-lg-2 ">Prenom:</label>
					<p class="col-lg-6" id='prenom_etudiant'> <?php  affiche($row['prenom']);  ?> </p>
				</div>

				<div class="row">
					<label class="col-lg-2 ">N° de sécurité Sociale:</label>
					<p class="col-lg-1"> <?php  affiche($row['numero_securite_sociale']);  ?> </p>
				</div>

				<div class="row">
						<label class="col-lg-2">Situation familiale: </label>
						<p class="col-lg-6"> <?php  affiche($row['situation_familiale']);  ?> </p>
				</div>
				<div class="row">
						<label class="col-lg-2">Nombre d'enfants:</label> 
						<p class="col-lg-6"> <?php  affiche($row['nombre_enfants']);  ?> </p>
				</div>

				<div class="row">
					<label class="col-lg-2">Né(e) le:</label>
					 <p class="col-lg-6"><?php  affiche($row['date_naissance']);  ?><p/>
				</div>

				<div class="row">
					<label class="col-lg-2">A:</label>
					<p class="col-lg-6"><?php  affiche($row['lieu_naissance']);  ?> <p/>
				</div>

				<div class="row">
						<label class="col-lg-2">Département: </label>
						<p class="col-lg-6"> <?php  affiche($row['departement']);  ?> </p>
				</div>
				<div class="row">
						<label class="col-lg-2">ou pays:</label> 
						<p class="col-lg-6"> <?php  affiche($row['pays']);  ?> </p>
				</div>

				<div class="row">
					<label class="col-lg-2">Nationalité:</label>
					<p class="col-lg-6"><?php  affiche($row['nationalite']);  ?> <p/>
				</div>

				<div class="row">
					<label class="col-lg-2">Adresse de la famille:</label>
					<p class="col-lg-6"><?php affiche($row['adresse_famille']);  ?> <p/>
				</div>

				<div class="row">
					<label class="col-lg-2">Adresse de l'année en cours (si differente de la famille):</label>
					<p class="col-lg-6 "> <?php affiche($row['adresse_annee_en_cours']);  ?> <p/>
				</div>

				<div class="row">
						<label class="col-lg-2">Téléphone fixe: </label>
						<p class="col-lg-6"> <?php affiche($row['telephone_personnel']); ?> </p>
				</div>
				<div class="row">
						<label class="col-lg-2">Téléphone portable:</label> 
						<p class="col-lg-6"> <?php affiche($row['telephone_portable']); ?> </p>
				</div>

				<div class="row">
					<label class="col-lg-2">Bac :</label>
				</div>

				<div class="row">	
						<label class="col-lg-2 ">Année: </label>
						<p class="col-lg-6"> <?php affiche($row['annee_bac']); ?> </p>
				</div>
				<div class="row">	
						<label class="col-lg-2">Serie:</label> 
						<p class="col-lg-6"> <?php affiche($row['serie_bac']); ?> </p>
				</div>

				<div class="row">
					<label class="col-lg-2">Dernier établissement secondaire fréquenté :</label>
					<p class="col-lg-6"> <?php affiche($row['dernier_etablissement_secondaire_frequente']); ?> </p>
				</div>

				<div class="row">
					<label class="col-lg-2">Avez-vous fait une demande de bourse de l'Enseignement Supérieur ?</label>
					<p class="col-lg-6"> <?php affiche($row['demande_bourse']); ?>  </p>
				</div>

				<div class="row">
					<label class="col-lg-2">A-t-elle été accordée ?</label>
					<p class="col-lg-6"> <?php affiche($row['demande_bourse_accordee']); ?> </p>
				</div>

				<div class="row">
					<label class="col-lg-2">Dernière école fréquentée dans l'enseignement supérieur :</label>
					<p class="col-lg-6"> <?php affiche($row['derniere_ecole_frequentee_enseignement_superieure']); ?> </p>
				</div>

				<!--<div class="row">
					<label class="col-lg-1 col-lg-offset-1">Nom</label>
					<input class="col-lg-2" type="text"/>
					<label class="col-lg-1 col-lg-offset-1">Ville</label>
					<input class="col-lg-2 col-lg-offset-1" type="text"/>
				</div> <br/>-->

				<div class="row">
					<label class="col-lg-2">Filière suivie :</label>
					<p class="col-lg-6"> <?php affiche($row['filiere_suivie']); ?> </p>			
				</div>

				<div class="row">
					<label class="col-lg-2">Diplôme obtenu ou année validées :</label>
					<p class="col-lg-6"> <?php affiche($row['diplome_obtenu_annee_validees']); ?> </p>
				</div>

				<div class="row">
					<label class="col-lg-3">Avez-vous fait une demande dans un autre IUT ou dans un autre département de l'IUT de Villetaneuse pour la rentrée universitaire ?</label>
				<p class="col-lg-6"> <?php affiche($row['demande_autre_iut_autre_departement']); ?> </p>
				</div>

				<div class="row">
					<label class="col-lg-3">Etablissement et specialité 1 :</label>
					<p class="col-lg-6"> <?php affiche($row['specialite_etablissement_1']); ?> </p>
				</div>
				<div class="row">
					<label class="col-lg-3">Etablissement et specialité 2 :</label>
					<p class="col-lg-6"> <?php affiche($row['specialite_etablissement_2']); ?> </p>
				</div>
				<div class="row">
					<label class="col-lg-3">Etablissement et specialité 3 :</label>
					<p class="col-lg-6 "> <?php affiche($row['specialite_etablissement_3']); ?> </p>
				</div>
				

				<!--<div class="row">
					<label class="col-lg-2">Etablisement</label>
					<input class="col-lg-2" type="text">
					<label class="col-lg-2 col-lg-offset-1">Spécialité</label>
					<input class="col-lg-2" type="text">
				</div><br/>-->

				<div class="row">
					<label class="col-lg-3">Comment avez-vous eu connaissance de notre formation ?</label>
					<p class="col-lg-6"> <?php affiche($row['connaissance_formation']); ?> </p>
				</div>

				<!--<div class="row">
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
				</div><br/>		-->


<!--
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



-->






</body>
</html>