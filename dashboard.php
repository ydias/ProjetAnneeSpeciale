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
             <form class='Toolbox_form col-sm-3'>
               <SELECT name="nom" size="1">
                 <OPTION>Trier par date</OPTION>
                 <OPTION>Trier par nom</OPTION>
                 <OPTION>Trier par etudiant</OPTION>
                 <OPTION>Trier par administrateur</OPTION>
               </SELECT>
              </form>
        	</div>
        	
          <?php
        	 $a = new action();
        	 for($x = 0; $x < 4; $x++)
              $a->affiche();
        	?>

          <?php 
            $nbpage = 10;
            $pageActuel = 1;

            echo '<p class="page" ><a href="*"><-</a>';
            if($pageActuel > 2)
              echo '<a href="*"> 1 </a>';

             if($pageActuel > 3)
              echo '...';

            if($pageActuel>1)
              echo '<a href="*">'. ($pageActuel-1) .' </a>';

            echo '<a href="*" class="page_actuel">'. $pageActuel .' </a>';
            
            if($pageActuel < $nbpage)
             echo'<a href="*">'. ($pageActuel+1) .' </a>';

            if($pageActuel < $nbpage - 2)
             echo'...';

            echo'<a href="*">'. $nbpage.' </a><a href="*">-></a></p>';


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