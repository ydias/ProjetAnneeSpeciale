<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Gestion des admins</title>
    
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
                <li>
                    <a href="liste_dossiers.php">
                        Liste des candidats
                    </a>
                </li>
                <li class="active">
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
        <h1>Liste des admins</h1>
        <div class="">
        <br/>
        
        <button class="btn btn-primary" data-title="Add" data-toggle="modal" data-target="#add" ><span class="glyphicon glyphicon-plus"></span>Ajouter un admin</button>
        <br/>
        <br/>
		<table id="admin_grid" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Mail</th>
                <th></th>
                <th>Mail</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>Mail</th>
                <th></th>
                <th>Mail</th>
            </tr>
        </tfoot>
    </table>
    </div>
</div>
</div>






<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        Ajouter un admin : 

     <form action="ajouter_admin.php" method="post">
     <input type="text" name="login" placeholder="login" />
     <input type="text" name="mdp" placeholder="mdp" />
     <input class="btn btn-primary" type="submit" value="Ajouter admin">
     </form>
        
        
        </div>
      </div>
     
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 




</body>

</p>
<script type="text/javascript">
$( document ).ready(function() {
$('#admin_grid').DataTable({
				 "bProcessing": true,
         "serverSide": true,
         "ajax":{
            url :"fetch_admins.php", // json datasource
            type: "post",  // type of method  ,GET/POST/DELETE
            error: function(){
              //$("#employee_grid_processing").css("display","none");
            }
          },
          "columns": [
                { "data": "1", "bSearchable": false, "bSortable": false, "sWidth": "40px"},
                {
                    "data": "Inquiry", "bSearchable": false, "bSortable": false, "sWidth": "40px",
                    "data": function (data) {
                        return  '<form action="supprimer_admin.php" class="supprimer" method="post"><input type="hidden" name="id" value="'+data[0]+'"><input class="btn btn-danger" type="submit" value="Supprimer"></form>'
                    }},
              	{
                    "data": "Inquiry", "bSearchable": false, "bSortable": false, "sWidth": "40px",
                    "data": function (data) {
                        return  '<a class="btn btn-primary" href="mailto:'+data[1]+'">Envoyer</a>'
                    }}
                
            ]
        });  
});
</script>