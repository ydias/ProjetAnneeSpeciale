<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Datatable with mysql</title>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs-3.3.7/jqc-1.12.4/dt-1.10.13/datatables.min.css"/>
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

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
                    <a href="#dashboard">
                        Modifications récentes
                    </a>
                </li>
                <li class="active">
                    <a href="#liste_candidats">
                        Liste des candidats
                    </a>
                </li>
                <li>
                    <a href="#mails">
                        Envoi de mails
                    </a>
                </li>
                <li>
                    <a href="#gestion_admin">
                        Gestion des admins
                    </a>
                </li>
            </ul>
        </div>
    </nav>

<!-- Fin navbar -->

	
	<div class="container">
      <div class="">
        <h1>Liste des candidats</h1>
        <div class="">
        <br/><br/><br/>
		<table id="student_grid" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
				        <th></th>
                <th>Etat dossier</th>
                <th>Mail</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th></th>
                <th>Etat dossier</th>
                <th>Mail</th>
            </tr>
        </tfoot>
    </table>
    </div>
      </div>

    </div>




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
                { "data": "0" ,"bSearchable": false, "bSortable": false, "sWidth": "40px"},
                { "data": "4" },
              	{
                    "data": "Inquiry", "bSearchable": false, "bSortable": false, "sWidth": "40px",
                    "data": function (data) {
                        return  '<a class="btn btn-primary" href="mailto:'+data[3]+'">Envoyer</a>'
                    }}
                
            ]
        });   
});
</script>
