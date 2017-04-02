<!DOCTYPE html>

<html>
<?php
    require_once('BDD/connexionbdd.php'); 
?>
	<head>

		<title>envoie</title>
		<meta charset="utf-8">			
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"/>
	  	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="Fct_PageEtudiant/pageEtudient.css">
        <script src="Fct_EnvoieEmailenvoieEmail.js"></script>
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
   
    <div class="row" id="identifient">
        <br/><br/>
    </div>
    </div>
    <div class="container2">
        
   
    <?php //recupération des données
        if (isset($_POST['mail'])&&isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['securiteSociale'])&&
            isset($_POST['situationFamiliale'])&&isset($_POST['nbEnfants'])&&
            isset($_POST['dateNaissance'])&&isset($_POST['villeNaissance'])&&isset($_POST['departement'])&&isset($_POST['pays'])&&isset($_POST['nationalité'])&&isset($_POST['adresse'])
            &&isset($_POST['adresse2'])&&isset($_POST['telFixe'])&&isset($_POST['telPort'])&&isset($_POST['AnnéeBac'])&&isset($_POST['serieBac'])
            &&isset($_POST['NomDernierEtablissementSecondaire'])&&isset($_POST['VilleDernierEtablissementSecondaire'])&&isset($_POST['demande'])
            &&isset($_POST['accordée'])&&isset($_POST['NomDernierEtablissement'])&&isset($_POST['VilleDernierEtablissement'])&&isset($_POST['filiere'])
            &&isset($_POST['diplomeAnnee'])&&isset($_POST['inscription'])&&isset($_POST['connaissance'])) {

                                
            $mail=$_POST['mail'];
            $nom=$_POST['nom'];
            $prenom=$_POST['prenom'];
            $securiteSociale=$_POST['securiteSociale'];
            $situationFamiliale=$_POST['situationFamiliale'];
            $nbEnfants=$_POST['nbEnfants'];
            $dateNaissance=$_POST['dateNaissance'];
            $villeNaissance=$_POST['villeNaissance'];
            if (trim($_POST['departement'])!='') {
                $departement=$_POST['departement'];
            }else{
                $departement="none";
            }
            if (trim($_POST['pays'])!='') {
                $pays=$_POST['pays'];
            }
            else{
                $pays=$_POST['pays'];
            }
            $nationalité=$_POST['nationalité'];
            $adresse=$_POST['adresse'];
            $adresse2="none";
            if (trim($_POST['adresse2'])!='') {
                $adresse2=$_POST['adresse2'];
            }
            else{
              $adresse2='none';
            }

            $telFixe=$_POST['telFixe'];
            $telPort=$_POST['telPort'];
            $AnnéeBac=$_POST['AnnéeBac'];
            $serieBac=$_POST['serieBac'];
            $NomDernierEtablissementSecondaire=$_POST['NomDernierEtablissementSecondaire'];
            $VilleDernierEtablissementSecondaire=$_POST['VilleDernierEtablissementSecondaire'];
            $demande=$_POST['demande'];
            $accordée=$_POST['accordée'];

            $NomDernierEtablissement=$_POST['NomDernierEtablissement'];
            $VilleDernierEtablissement=$_POST['VilleDernierEtablissement'];
            $filiere=$_POST['filiere'];
            $diplomeAnnee=$_POST['diplomeAnnee'];
            $autreIUTDemande=$_POST['inscription'];
            if (isset($_POST["AutreEtablissement1"])&&(trim($_POST["AutreEtablissement1"])!='')&&isset($_POST['AutreSpe1'])&&trim($_POST['AutreSpe1'])) {
                $AutreEtablissement1=$_POST['AutreEtablissement1'];
                $AutreSpe1=$_POST['AutreSpe1'];
            }else{
                $AutreEtablissement1='none';
                $AutreSpe1='none';
            }
            if (isset($_POST["AutreEtablissement2"])&&(trim($_POST["AutreEtablissement2"])!='')&&isset($_POST['AutreSpe2'])&&trim($_POST['AutreSpe2'])) {
                $AutreEtablissement2=$_POST['AutreEtablissement2'];
                $AutreSpe2=$_POST['AutreSpe2'];
            }else{
                $AutreEtablissement2='none';
                $AutreSpe2='none';
            }
            if (isset($_POST["AutreEtablissement3"])&&(trim($_POST["AutreEtablissement3"])!='')&&isset($_POST['AutreSpe3'])&&trim($_POST['AutreSpe3'])) {
                $AutreEtablissement3=$_POST['AutreEtablissement3'];
                $AutreSpe3=$_POST['AutreSpe3'];
            }else{
                $AutreEtablissement3='none';
                $AutreSpe3='none';
            }
            $connaissance=$_POST['connaissance'];
            if ($connaissance=='Lycée'&&isset($_POST['connaissanceLycée'])&&trim($_POST['connaissanceLycée']!='')) {
                $donneCompl=$_POST['connaissanceLycée'];
            }elseif ($connaissance=='Salon'&&isset($_POST['connaissanceSalon'])&&trim($_POST['connaissanceSalon'])!='') {
                $donneCompl=$_POST['connaissanceSalon'];
            }elseif ($connaissance=='Ancien') {
                $donneCompl='Ancien étudiant';
            }elseif ($connaissance=='Presse'&&isset($_POST['connaissancePresse'])&&trim($_POST['connaissancePresse'])!='') {
                $donneCompl=$_POST['connaissancePresse'];
            }elseif ($connaissance=='Internet'&&isset($_POST['connaissanceInternet'])&&trim($_POST['connaissanceInternet'])!='') {
                $donneCompl=$_POST['connaissanceInternet'];
            }elseif ($connaissance=='Autres'&&isset($_POST['connaissanceAutres'])&&trim($_POST['connaissanceAutres'])!='') {
                $donneCompl=$_POST['connaissanceAutres'];
            }
            else{
                $donneCompl='none';
            }
            $prepare=$db->prepare('SELECT count(id) FROM etudiant');
            $prepare->execute();
            $tab2=$prepare->fetch(PDO::FETCH_NUM);
            if ($tab2[0]<1) {
                $donne = $db->prepare('INSERT INTO etudiant(id,nom,prenom,email,mdp,actif,numero_securite_sociale,situation_familiale,nombre_enfants,date_naissance,lieu_naissance,departement,pays,nationalite,adresse_famille,adresse_annee_en_cours,telephone_personnel,telephone_portable,annee_bac,serie_bac,dernier_etablissement_secondaire_frequente_nom,dernier_etablissement_secondaire_frequente_ville,demande_bourse,demande_bourse_accordee,derniere_ecole_frequentee_ens_sup_nom,derniere_ecole_frequentee_ens_sup_ville,filiere_suivie,diplome_obtenu_annee_validees,demande_autre_iut_autre_departement,nom_etablissement_1,specialite_etablissement_1,nom_etablissement_2,specialite_etablissement_2,nom_etablissement_3,specialite_etablissement_3,connaissance_formation,connaissance_formation_autre,etat_dossier)
                    VALUES (1,:nom,:prenom,:email,:mdp,:actif,:nss,:situation_familiale,:nombre_enfants,:date_naissance,:lieu_naissance,:departement,:pays,:nationalite,:adresse_famille,:aaec,:telephone_personnel,:telephone_portable,:annee_bac,:serie_bac,:desfn,:desfv,:demande_bourse,:demande_bourse_accordee,:defesn,:defesv,:filiere_suivie,:doav,:daiad,:nom_etablissement_1,:specialite_etablissement_1,:nom_etablissement_2,:specialite_etablissement_2,:nom_etablissement_3,:specialite_etablissement_3,:connaissance_formation,:connaissance_formation_autre,:etat_dossier)' );
            }else{
                $donne = $db->prepare('INSERT INTO etudiant(nom,prenom,email,mdp,actif,numero_securite_sociale,situation_familiale,nombre_enfants,date_naissance,lieu_naissance,departement,pays,nationalite,adresse_famille,adresse_annee_en_cours,telephone_personnel,telephone_portable,annee_bac,serie_bac,dernier_etablissement_secondaire_frequente_nom,dernier_etablissement_secondaire_frequente_ville,demande_bourse,demande_bourse_accordee,derniere_ecole_frequentee_ens_sup_nom,derniere_ecole_frequentee_ens_sup_ville,filiere_suivie,diplome_obtenu_annee_validees,demande_autre_iut_autre_departement,nom_etablissement_1,specialite_etablissement_1,nom_etablissement_2,specialite_etablissement_2,nom_etablissement_3,specialite_etablissement_3,connaissance_formation,connaissance_formation_autre,etat_dossier)
                    VALUES (:nom,:prenom,:email,:mdp,:actif,:nss,:situation_familiale,:nombre_enfants,:date_naissance,:lieu_naissance,:departement,:pays,:nationalite,:adresse_famille,:aaec,:telephone_personnel,:telephone_portable,:annee_bac,:serie_bac,:desfn,:desfv,:demande_bourse,:demande_bourse_accordee,:defesn,:defesv,:filiere_suivie,:doav,:daiad,:nom_etablissement_1,:specialite_etablissement_1,:nom_etablissement_2,:specialite_etablissement_2,:nom_etablissement_3,:specialite_etablissement_3,:connaissance_formation,:connaissance_formation_autre,:etat_dossier)' );
            }

            $actif="non identifie";
            $etat_dossier='Non confirme';
            
            $donne->bindValue(':nom',$nom);$donne->bindValue(':prenom',$prenom);
            $donne->bindValue(':email',$mail);$donne->bindValue(':mdp',"none");
            $donne->bindValue(':actif',$actif);$donne->bindValue(':nss',$securiteSociale);
            $donne->bindValue(':situation_familiale',$situationFamiliale);$donne->bindValue(':nombre_enfants',$nbEnfants);
            $donne->bindValue(':date_naissance',$dateNaissance);$donne->bindValue(':lieu_naissance',$villeNaissance);
            $donne->bindValue(':departement',$departement);$donne->bindValue(':pays',$pays);
            $donne->bindValue(':nationalite',$nationalité);$donne->bindValue(':adresse_famille',$adresse);
            $donne->bindValue(':aaec',$adresse2);$donne->bindValue(':telephone_personnel',$telFixe);
            $donne->bindValue(':telephone_portable',$telPort);$donne->bindValue(':annee_bac', $AnnéeBac);
            $donne->bindValue(':serie_bac',$serieBac);$donne->bindValue(':desfn',$NomDernierEtablissementSecondaire);$donne->bindValue(':desfv',$VilleDernierEtablissementSecondaire);
            $donne->bindValue(':demande_bourse',$demande);$donne->bindValue(':demande_bourse_accordee',$accordée);
            $donne->bindValue(':defesn',$NomDernierEtablissement);$donne->bindValue(':defesv',$VilleDernierEtablissement);$donne->bindValue(':filiere_suivie', $filiere);
            $donne->bindValue(':doav',$diplomeAnnee);$donne->bindValue(':daiad',$autreIUTDemande);
            $donne->bindValue(':nom_etablissement_1',$AutreEtablissement1);$donne->bindValue(':specialite_etablissement_1',$AutreSpe1);
            $donne->bindValue(':nom_etablissement_2',$AutreEtablissement2);$donne->bindValue(':specialite_etablissement_2',$AutreSpe2);
            $donne->bindValue(':nom_etablissement_3',$AutreEtablissement3);$donne->bindValue(':specialite_etablissement_3',$AutreSpe3);
            $donne->bindValue(':connaissance_formation',$connaissance);$donne->bindValue(':connaissance_formation_autre',$donneCompl);
            $donne->bindValue(':etat_dossier',$etat_dossier);
            $donne->execute();

           //envois email
            $destinataire=$mail;
            $sujet="Activer votre compte";
            $Message='Vous venez de vous inscrire en DUT informatique en Année Speciale,

            Pour activer votre compte, veillez cliquer sur le lien ci dessous ou copier/coller dans votre navigateur internet.

            
            localhost/projetS4/ProjetAnneeSpeciale-master/validation.php?Nom='.urlencode($nom).'&Prenom='.urlencode($prenom).'
            ---------------
            ceci est un mail automatique, Merci de ne pas y repondre.';
            mail($destinataire, $sujet, $Message);
            echo "<h2 class='col-lg-8 col-lg-offset-2'>Un mail vous a été envoyer veillez verifier votre boite email</h2>";

        }
        

    ?>
     </div>
</header>
 </body>
</html>
