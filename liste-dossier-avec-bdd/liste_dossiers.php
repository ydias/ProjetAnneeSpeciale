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
           <img src="IUT-villetaneuse.png" alt="accueil"/> <font size="6" style="position: absolute;right: 25px;top: 60px;">
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
<body>
	<div class="container">
      <div class="">
        <h1>Liste des candidats</h1>
        <div class="">
        <br/>
        <?php include("mailing_lists.php");
        echo "Envoyer un mail a tous les : ".$bouton_refus." ".$bouton_accepte." ".$bouton_attente." ".$bouton_non_confirme." ".$bouton_liste_complementaire;
        ?>
        <br/>
        <br/>
		<table id="student_grid" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
				<th>Etat dossier</th>
                <th></th>
                <th>Mail</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Etat dossier</th>
                <th></th>
                <th>Mail</th>
            </tr>
        </tfoot>
    </table>
    </div>
</div>
</div>


</body>


<!--<form onsubmit="javascript:window.open('dossier_admin.php','width=400,height=500,scrollbars=yes')" ><input type="hidden" name="id" value="lol"><input class="btn btn-primary" type="submit" value="Consulter dossier" ></form>

<a class='btn btn-primary' href='mailto:?bcc=yanndias@live.fr,yanndias@club-internet.fr'> mailing list <a>-->
</p>
<script type="text/javascript">
$( document ).ready(function() {
$('#student_grid').DataTable({
				 "bProcessing": true,
         "serverSide": true,
         "ajax":{
            url :"liste_etudiants.php", // json datasource
            type: "post",  // type of method  ,GET/POST/DELETE
            error: function(){
              //$("#employee_grid_processing").css("display","none");
            }
          },
          "columns": [
                { "data": "1", "bSearchable": false, "bSortable": false, "sWidth": "40px"},
                { "data": "2" ,"bSearchable": false, "bSortable": false, "sWidth": "40px"},
                { "data": "4" ,"bSearchable": false, "bSortable": false, "sWidth": "40px"},
                {
                    "data": "Inquiry", "bSearchable": false, "bSortable": false, "sWidth": "40px",
                    "data": function (data) {
                        return  '<form action="dossier_admin.php" method="post"><input type="hidden" name="id" value="'+data[0]+'"><input class="btn btn-primary" type="submit" value="Consulter dossier"></form>'
                    }},
              	{
                    "data": "Inquiry", "bSearchable": false, "bSortable": false, "sWidth": "40px",
                    "data": function (data) {
                        return  '<a class="btn btn-primary" href="mailto:'+data[3]+'">Envoyer</a>'
                    }}
                
            ]
        });   
});
</script>
