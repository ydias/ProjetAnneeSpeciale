<!DOCTYPE html>
<html>
	<?php
        require_once('connexionbdd.php'); 
    ?>
    <head>

		<title>Validation</title>
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
    </div>
    <div class="row" id="identifient">
        <br/><br/>
    </div>
        <?php
            if (isset($_GET['Nom'])&&isset($_GET['Prenom'])) {
                $nom=$_GET['Nom'];
                $prenom=$_GET['Prenom'];
                $donne=$db->prepare('SELECT actif,email , id FROM etudiant WHERE nom like :nom AND prenom like :prenom');
                $donne->bindValue(':nom',$nom);
                $donne->bindValue(':prenom',$prenom);
                $donne->execute();
                $tab=$donne->fetch(PDO::FETCH_ASSOC);
                $val=$tab['actif'];
                 echo "<div class='row'>";
                if ($val=='identifie') {
                   
                    echo "<h2 class='col-lg-8 col-lg-offset-3'>Votre compte est déjà actif !</h2></div>";
                }else{
                    echo "<h2 class='col-lg-8 col-lg-offset-3'>Votre compte a bien été activé!</h2></div>";
                    $requete = $db->prepare('SELECT mdp FROM etudiant');
                    $requete->execute();
                    $tab2=$requete->fetch(PDO::FETCH_ASSOC);
                    do {
                        $mdpass = md5(microtime(TRUE));
                        $mdpass = substr($mdpass, 0, 8);
                        $test=TRUE;
                        $grainDeSel = "8YzlCAydpEK821BgBNNP";
                        $mdp_crypte = sha1($mdpass . $grainDeSel);
                        foreach ($tab2 as $key => $value) {
                            if ($value==$mdp_crypte) {
                                $test=false;
                  
                            }
                        }
                    } while ($test==false);

                    $donne=$db->prepare('UPDATE etudiant SET actif=:value , mdp=:mdp WHERE nom like :nom AND prenom like :prenom');
                    $donne->bindValue(':nom',$nom);
                    $donne->bindValue(':prenom',$prenom);
                    $donne->bindValue(':mdp',$mdp_crypte);
                    $donne->bindValue(':value','identifie');
                    $donne->execute();
                    $val2=$tab['email'];
                    echo "<div class='row'></br>";
                    echo "<h4 class='col-lg-3 col-lg-offset-2'> Votre identifient : </h4><h4 class='col-lg-2'>".$val2."</h4></div>";
                    echo "<h4 class='col-lg-3 col-lg-offset-2'>Votre Mot de passe : </h4><h4 class='col-lg-2'>".$mdpass."</h4></div>";
                    echo "<div class='row'></br>";

                    $destinataire=$val2;
                    $sujet="mot de passe et identifient";
$Message='vous vous êtes bien identifié, vous pouvez a présent vous connecter a votre page, et y ajouter vos document.
        identifient : '.$val2.'
        mot de passe : '.$mdpass.'
---------------
ceci est un mail automatique, Merci de ne pas y repondre.';
                    mail($val2, $sujet, $Message);
                    echo "<h4 class='col-lg-8 col-lg-offset-2'>vos coordonnée vous a aussi été envoyer par mail</h4></div>";               
                }

  
            }
        ?>
    

</header>
 </body>
</html>