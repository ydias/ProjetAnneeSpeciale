<?php

/*session_start();

if(!isset($_SESSION['admin']) || $_SESSION['admin']==false) {

  echo '<meta http-equiv="refresh" content="0"; URL="accueil.php"> ';

}*/

?>


<?php 
  require_once('Class_action.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="accueil.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" />
    <link href="dashbord.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
  <body>
    <div class="container-fluid"> <!--Le mots fluid permet d'enlever les marge ajouter de base au conteneur de bootstrap -->
      
      <!-- Navbar -->
<header>
    <!-- HEADER -->
    <div id="header">
        <div class="container" style="display: inline;">
           <img src="IUT-villetaneuse.png" alt="accueil"/> <font size="7" style="position: absolute;right: 25px;top: 60px;">
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
                    <a href="#main">
                        Accueil
                    </a>
                </li>
                <li>
                    <a href="#dashboard">
                        Mon dossier
                    </a>
                </li>
            
            
           
            </ul>
        </div>
    </nav>

<!-- Fin navbar -->

      <div class="row">
        <section class="col-sm-12">
        	<div class="row">
        		<div class="titre col-sm-9">
        			<h5>Historique :</h5>
        		</div>
        	</div>
        	
          <?php

            require('BDD_connexion.php');               /*BOUCLE D'AFFICHAGE DE L'HISTORIQUE*/
            $BaseDeDonne = $bdd->query('select * from historique');
            while($line = $BaseDeDonne->fetch())
            {
              $action = new action($line['action'], $line['info'], $line['date'], $line['id'], $line['nom_etudiant'], $line['nom_admin']);
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