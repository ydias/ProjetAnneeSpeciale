<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Liste des candidatures</title>
    
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/jqc-1.12.4/dt-1.10.13/datatables.min.css"/>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
</head>

<!-- Navbar -->
<header>
    <!-- HEADER -->
    <div id="header">
        <div class="container" style="display: inline;">
           <img src="Image/IUT-villetaneuse.png" alt="accueil"/> <font size="6" style="position: absolute;right: 25px;top: 60px;">
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
                    <a href="dashboard.php">
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
			<ul class="nav navbar-nav navbar-right">
			<li><a href="Fct_GLOBALE/deconnexion.php"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- Fin navbar -->
<body>
	<div class="container">
        <h1>Liste des candidats</h1>
        <br/>

<div class='row'>
<!--- BUTTON AVEC LES MAILS -->
<?php  include("Fct_ListeDossier/mailing_lists.php");?>


 <div class="pull-left btn-group btn-sm dropup">

  <div class="btn-group btn-sm">
  	<button type="button" class="btn btn-primary btn-sm">Envoyer un mail à tous les : </button>
    <button type="button" class="btn btn-primary btn-sm" data-toggle="dropdown">
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="mailto:?bcc=<?php echo $refus ?>">Refusés</a></li>
      <li><a href="mailto:?bcc=<?php echo $accepte ?>">Acceptés</a></li>
      <li><a href="mailto:?bcc=<?php echo $liste_complementaire ?>">En liste Complémentaire</a></li>
      <li><a href="mailto:?bcc=<?php echo $attente ?>">En attente de réponse</a></li>
      <li><a href="mailto:?bcc=<?php echo $non_confirme ?>">Non confirmés</a></li>
    </ul>
  </div>
</div>
<!-- BUTTON AVEC LES MAILS -->




<!-- Options filtrage préremplies -->
        <div class='filtrage pull-right' >
            <form>
                <p>
                    <b>Filtrer par :</b>

                    <select name="Filtre" id="filtre">

                        <option value=""> Tous les etudiants </option>

                        <optgroup label="Etat du dossier">

                            <option value="Accepte">Accepté</option>

                            <option value="Refuse">Refusé</option>

                            <option value="En attente de reponse">En attente</option>

                            <option value="Non confirme">Non confirmé</option>

                            <option value="En liste complementaire">En liste complémentaire</option>
                         </optgroup>

                        <optgroup label="Actif ?">

                            <option value="identifie">Etudiant identifié</option>

                            <option value="non identifie">Etudiant non identifié</option>

                        </optgroup>

                    </select>

                </p>

        </form>
        </div>
        <br/>
<!-- Options Filtrage -->
</div>


<!-- Tableau -->
		<table id="student_grid" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
				<th>Etat dossier</th>
                <th>Est actif? </th>
                <th></th>
                <th>Mail</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Etat dossier</th>
                <th>Est actif? </th>
                <th></th>
                <th>Mail</th>
            </tr>
        </tfoot>
    </table>
    <!-- Fin Tableau -->
    <br/>

    <!-- Envoi de mails groupés (boutons) -->
    <!--<div class="row">
    <label class='pull-left'> Envoyer un mail a tous les :</label>
        <div class="btn-group">
        <?php include("Fct_ListeDossier/mailing_lists.php");
        echo " ".$bouton_refus." ".$bouton_accepte." ".$bouton_attente." ".$bouton_non_confirme." ".$bouton_liste_complementaire;
        ?>
        </div>
    </div>
        <br/>-->
    <!-- Envoi de mails groupés -->



    </div>
</body>

</html>


<script type="text/javascript" >
$( document ).ready(function() {

// Gestion du Tableau 
$('#student_grid').DataTable({
		 "bProcessing": true,
         "serverSide": true,
          "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/French.json",
                searchPlaceholder: "Nom, Prénom ou Mail"
            },
         "ajax":{
            url :"Fct_ListeDossier/liste_etudiants.php", // json a récuperer
            type: "post",  
          },
          "columns": [
                { "data": "1", "bSearchable": false, "bSortable": false, "sWidth": "80px"},
                { "data": "2" ,"bSearchable": false, "bSortable": false, "sWidth": "80px"},
                { "data": "4" ,"bSearchable": false, "bSortable": false, "sWidth": "80px"}, // faire en sorte de rajouter
                {
                    "data": "Inquiry", "bSearchable": false, "bSortable": false, "sWidth": "40px",
                    "data": function (data) {
                        if(data[5]==='identifie'){
                            return "<span class= 'glyphicon glyphicon-ok' aria-hidden='true'></span>";
                        }
                        else return "<span class= 'glyphicon glyphicon-remove' aria-hidden='true'></span>";
                    }},
                {
                    "data": "Inquiry", "bSearchable": false, "bSortable": false, "sWidth": "40px",
                    "data": function (data) {
                        return  '<form action="dossier_admin.php" method="post"><input type="hidden" name="id" value="'+data[0]+'"><input class="btn btn-primary btn-sm" type="submit" value="Consulter dossier"></form>'
                    }},
              	{
                    "data": "Inquiry", "bSearchable": false, "bSortable": false, "sWidth": "40px",
                    "data": function (data) {
                        return  '<a class="btn btn-primary btn-sm" href="mailto:'+data[3]+'">Envoyer</a>'
                    }}
                
            ]
        });
        $

        
        

// Fin tableau
    

    $( "#filtre" ).change(function() {
        //alert($(this).val());
        $('.dataTables_filter input').val($(this).val());
        
        //Simuler un appui sur la touche entrée(pour le filtre)
        e = jQuery.Event("keyup");
        e.which = 13 //touche entrée
        jQuery('.dataTables_filter input').trigger(e);
        ///////
        $('.dataTables_filter input').val('');
        $('.sorting_asc').removeClass();
        
    });   

});
</script>
