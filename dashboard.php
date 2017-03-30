<?php 
  require_once('Class_action.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dashbord.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
  <body>
    <div class="container-fluid"> <!--Le mots fluid permet d'enlever les marge ajouter de base au conteneur de bootstrap -->
      <?php 
        require_once('entete.php');
      ?>
      <div class="row">
        <section class="col-sm-12">
        	<div class="row">
        		<div class="titre col-sm-9">
        			<h5>Historique :</h5>
        		</div>
        	</div>
        	
          <?php

            for($x = 0; $x < 20; $x++)
            {
              $a = new action('Creation_de_dossier' ,'lorem ipsum' , '2017-03-30', $x, 'etudiant', 'admin');
              $a->enregistrer();
            }

            require('BDD_connexion.php');               /*BOUCLE D'AFFICHAGE DE L'HISTORIQUE*/
            $BaseDeDonne = $bdd->query('select * from historique');
            while($line = $BaseDeDonne->fetch())
            {
              $action = new action($line['id'], $line['info'], $line['date'], $line['id'], $line['nom_etudiant'], $line['nom_admin']);
              $action->affiche();
            }
            $BaseDeDonne->closeCursor(); // Termine le traitement de la requête
        	?>

          <p class='page'><span class='page_actuel'></span><span></span><span></span><span></span><span></span><span></span><span></span></p>

        </section>
      </div>
      <div class="row">
        <footer class="col-sm-12">Pied de page
        </footer>
      </div>
    </div>

    <script  language="JavaScript" type="text/javascript" src="Changement_page.js"></script>

  </body>
</html>