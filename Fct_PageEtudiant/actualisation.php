<!DOCTYPE html>

<html>
<?php 
            require_once('connexionbdd.php'); 
            session_start();
            $grainDeSel = "8YzlCAydpEK821BgBNNP";
            $mdp_crypte = sha1($_SESSION['mdp']. $grainDeSel);
            if (!isset($_SESSION['utilisateur'])||$_SESSION['utilisateur']=='admin') {
                echo'<meta http-equiv="refresh" content="0; URL=admin.php"/>' ;
            }elseif (!isset($_SESSION['utilisateur'])||$_SESSION['utilisateur']!='etudient') {
                echo'<meta http-equiv="refresh" content="0; URL=accueil.php"/>' ;
            }
            $mail=$_SESSION['email'];
            $req=$db->prepare('SELECT * FROM etudiant WHERE email=:mail AND mdp=:mdp');
            $req->bindValue(':mail',$mail);
            $req->bindValue(':mdp',$mdp_crypte);
            $req->execute();
            $tab=$req->fetch(PDO::FETCH_ASSOC);

            //fonction openclassroom, deplace doc dans doc page web
            function upload($index,$destination,$maxsize=FALSE,$extensions=FALSE)
            {
            //Test1: fichier correctement uploadé
             if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return FALSE;
            //Test2: taille limite
             if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize) return FALSE;
            //Test3: extension
            $ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
            if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
            //Déplacement
             return move_uploaded_file($_FILES[$index]['tmp_name'],$destination);
            }


         ?>
	<head>

		<title>envoie</title>
		<meta charset="utf-8">			
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css"/>
	  	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="pageEtudient.css">
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
   
    <div class="row" id="identifient">
        <?php echo '<h4 class="col-lg-offset-5 col-lg-2"> nom :'. $tab['prenom'].' </h4><h4 class="col-lg-2"> prenom :'. $tab['nom'].' </h4><h4 class="col-lg-3"> email :'. $tab['email'].' </h4>'?>
    </div>
    </div>
    <div class="container2">
        <?php
            if (isset($_POST['securiteSociale'])&&isset($_POST['situationFamiliale'])&&
                isset($_POST['nbEnfants'])&&isset($_POST['dateNaissance'])&&
                isset($_POST['villeNaissance'])&&isset($_POST['departement'])&&isset($_POST['pays'])&&
                isset($_POST['nationalité'])&&isset($_POST['adresse'])&&isset($_POST['adresse2'])&&
                isset($_POST['telFixe'])&&isset($_POST['telPort'])&&isset($_POST['AnnéeBac'])&&
                isset($_POST['serieBac'])&&isset($_POST['NomDernierEtablissementSecondaire'])&&
                isset($_POST['VilleDernierEtablissementSecondaire'])&&isset($_POST['demande'])&&
                isset($_POST['accordée'])&&isset($_POST['NomDernierEtablissement'])&&
                isset($_POST['VilleDernierEtablissement'])&&isset($_POST['filiere'])&&
                isset($_POST['diplomeAnnee'])&&isset($_POST['inscription'])&&isset($_POST['connaissance'])) {
                                
                $securiteSociale=$_POST['securiteSociale'];
                $situationFamiliale=$_POST['situationFamiliale'];
                $nbEnfants=$_POST['nbEnfants'];
                $dateNaissance=$_POST['dateNaissance'];
                $villeNaissance=$_POST['villeNaissance'];
                if (trim($_POST['departement'])!='') {
                    $departement=$_POST['departement'];
                }else{
                    $departement='none';
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
                //requete sur la fonction upload
                /*$etud=$tab['id']
                $req2=$db->prepare('INSERT INTO document(id_Etudient,doc) VALUES(:etudiant,:doc)');
                $req2->bindValue(':etudiant',$etud);
                $req2->bindValue(':doc','lettreDeMotivation');
                $req2->execute();
                $req3-$db
                $req3=$db->prepare('UPDATE document SET chemin=:chemin')
                $req3->bindValue('');*/
                $uploadldm = upload('lettreDeMotivation','docEtudient/lettreDeMotivation',FALSE, FALSE );
                if ($uploadldm) "Upload du fichier réussi!<br />";

                $uploadcv = upload('CV','docEtudient/CV',FALSE, FALSE );
                if ($uploadcv) "Upload du fichier réussi!<br />";

                $uploadPI = upload('photoIdentité','docEtudient/photoIdentité',FALSE, FALSE );
                if ($uploadPI) "Upload du fichier réussi!<br />";

                $uploadpnb = upload('photocopieNoteBac','docEtudient/photocopieNoteBac',FALSE, FALSE );
                if ($uploadpnb) "Upload du fichier réussi!<br />";

                $uploadpbt = upload('photocopieBulletinTerminal','docEtudient/photocopieBulletinTerminal',FALSE, FALSE );
                if ($uploadpbt) "Upload du fichier réussi!<br />";

                $uploadpdc = upload('photocopieDiplomeBac','docEtudient/photocopieDiplomeBac',FALSE, FALSE );
                if ($uploadpdc) "Upload du fichier réussi!<br />";

                $uploadj = upload('justificatif','docEtudient/justificatif',FALSE, FALSE );
                if ($uploadj) "Upload du fichier réussi!<br />";

                $donne = $db->prepare('UPDATE etudiant SET numero_securite_sociale=:nss , situation_familiale=:situation_familiale , nombre_enfants=:nombre_enfants , date_naissance=:date_naissance , lieu_naissance=:lieu_naissance , departement=:departement , pays=:pays , nationalite=:nationalite , adresse_famille=:adresse_famille , adresse_annee_en_cours=:aaec , telephone_personnel=:telephone_personnel , telephone_portable=:telephone_portable , annee_bac= :annee_bac , serie_bac=:serie_bac , dernier_etablissement_secondaire_frequente_nom=:desfn , dernier_etablissement_secondaire_frequente_ville=:desfv , demande_bourse=:demande_bourse , demande_bourse_accordee=:demande_bourse_accordee , derniere_ecole_frequentee_ens_sup_nom=:defesn , derniere_ecole_frequentee_ens_sup_ville=:defesv , filiere_suivie=:filiere_suivie , diplome_obtenu_annee_validees=:doav , demande_autre_iut_autre_departement=:daiad , nom_etablissement_1=:nom_etablissement_1 , specialite_etablissement_1=:specialite_etablissement_1 , nom_etablissement_2=:nom_etablissement_2 , specialite_etablissement_2=:specialite_etablissement_2 , nom_etablissement_3=:nom_etablissement_3 , specialite_etablissement_3=:specialite_etablissement_3 , connaissance_formation=:connaissance_formation , connaissance_formation_autre= :connaissance_formation_autre WHERE email=:mail AND mdp=:mdp');
                $donne->bindValue(':mail',$mail);
                $donne->bindValue(':mdp',$mdp_crypte);
                $donne->bindValue(':nss',$securiteSociale);
                $donne->bindValue(':situation_familiale',$situationFamiliale);$donne->bindValue(':nombre_enfants',$nbEnfants);
                $donne->bindValue(':date_naissance',$dateNaissance);$donne->bindValue(':lieu_naissance',$villeNaissance);
                $donne->bindValue(':departement',$departement);$donne->bindValue(':pays',$pays);
                $donne->bindValue(':nationalite',$nationalité);$donne->bindValue(':adresse_famille',$adresse);
                $donne->bindValue(':aaec',$adresse2);$donne->bindValue(':telephone_personnel',$telFixe);
                $donne->bindValue(':telephone_portable',$telPort);$donne->bindValue(':annee_bac', $AnnéeBac);
                $donne->bindValue(':serie_bac',$serieBac);
                $donne->bindValue(':desfn',$NomDernierEtablissementSecondaire);
                $donne->bindValue(':desfv',$VilleDernierEtablissementSecondaire);
                $donne->bindValue(':demande_bourse',$demande);$donne->bindValue(':demande_bourse_accordee',$accordée);
                $donne->bindValue(':defesn',$NomDernierEtablissement);$donne->bindValue(':defesv',$VilleDernierEtablissement);$donne->bindValue(':filiere_suivie', $filiere);
                $donne->bindValue(':doav',$diplomeAnnee);$donne->bindValue(':daiad',$autreIUTDemande);
                $donne->bindValue(':nom_etablissement_1',$AutreEtablissement1);$donne->bindValue(':specialite_etablissement_1',$AutreSpe1);
                $donne->bindValue(':nom_etablissement_2',$AutreEtablissement2);$donne->bindValue(':specialite_etablissement_2',$AutreSpe2);
                $donne->bindValue(':nom_etablissement_3',$AutreEtablissement3);$donne->bindValue(':specialite_etablissement_3',$AutreSpe3);
                $donne->bindValue(':connaissance_formation',$connaissance);$donne->bindValue(':connaissance_formation_autre',$donneCompl);
                $donne->execute();
                echo "<h2 class='col-lg-8 col-lg-offset-2'>vos données ont été mise a jour</h2>";
           };
        ?>
    </div>
</header>
 </body>
</html>