<?php 
  require_once('Class_action.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="dashbord.css" rel="stylesheet">
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
             <!--<form class='Toolbox_form col-sm-3'>
               <SELECT name="nom" size="1">
                 <OPTION>Trier par date</OPTION>
                 <OPTION>Trier par action</OPTION>
                 <OPTION>Trier par etudiant</OPTION>
                 <OPTION>Trier par administrateur</OPTION>
               </SELECT>
              </form>-->
        	</div>
        	
          <?php

            /*$a = new action('action', 'lorem ipsum', '2017-03-24', 1, 'etudiant', 'admin');            
            $a->enregistrer();
            $b = new action('action', 'lorem ipsum', '2017-03-24', 2, 'etudiant', 'admin');            
            $b->enregistrer();
            $c = new action('action', 'lorem ipsum', '2017-03-24', 3, 'etudiant', 'admin');            
            $c->enregistrer();
            $d = new action('action', 'lorem ipsum', '2017-03-24', 4, 'etudiant', 'admin');            
            $d->enregistrer();
            $e = new action('action', 'lorem ipsum', '2017-03-24', 5, 'etudiant', 'admin');            
            $e->enregistrer();*/


            require('BDD_connexion.php');
            $BaseDeDonne = $bdd->query('select * from historique');
            while($line = $BaseDeDonne->fetch())
            {
              $action = new action($line['action'], $line['info'], $line['date'], $line['id'], $line['nom_etudiant'], $line['nom_admin']);
              $action->affiche();
            }
            $BaseDeDonne->closeCursor(); // Termine le traitement de la requête

            $BaseDeDonne = $bdd->query('select count(id) from historique');
            $nb_ligne = $BaseDeDonne->fetch();
            $nbpage = 10/*(int)($nb_ligne['count(id)']/10)*/;
            /*echo '<script> alert('.$nbpage.')</script>';*/
            $pageActuel = 1;

        	?>

          <?php 
            require_once('Changement_page.php');
          ?>

        </section>
      </div>
      <div class="row">
        <footer class="col-sm-12">Pied de page
        </footer>
      </div>
    </div>
  </body>
</html>