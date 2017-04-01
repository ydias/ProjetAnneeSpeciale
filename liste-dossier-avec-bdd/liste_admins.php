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
            <ul class="nav navbar-nav navbar-right">
            <li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-out"></span> Deconnexion</a></li>
            </ul>
        </div>
    </nav>
</div>
<!-- Fin navbar -->
<body>
	<div class="container">
   
        <h1>Liste des admins</h1>
        <br/>
        
        <button class="btn btn-primary" data-title="Add" data-toggle="modal" data-target="#add" ><span class="glyphicon glyphicon-plus"></span>Ajouter un admin</button>
        <br/>
        <br/>
		<table id="admin_grid" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
                <th></th>
                <th>Mail</th>
            </tr>
        </thead>
 
        <tfoot>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Mail</th>
                <th></th>
                <th>Mail</th>

            </tr>
        </tfoot>
    </table>








<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">× </button>
        

        <b class="row">Ajouter un admin : </b> 

     <form action="ajouter_admin.php" method="post" class="form-horizontal" id='form_ajout_admin'> 
    
     <div class="form-group">
     <label class="control-label col-sm-2" for="nom">Nom:</label>
     <div class="col-sm-10">
     <input class="form-control" type="text" name="nom" placeholder="Nom" /> 
     </div>
     </div>

     <div class="form-group">
     <label class="control-label col-sm-2" for="prenom">Prenom:</label>
     <div class="col-sm-10">
     <input class="form-control" type="text" name="prenom" placeholder="Prenom" /> 
     </div>
     </div>

     <div class="form-group">
     <label class="control-label col-sm-2" for="email">Email:</label>
     <div class="col-sm-10">
     <input class="form-control" type="text" name="email" placeholder="Email" /> 
     </div>
     </div>

     <div class="form-group">
     <label class="control-label col-sm-2" for="mdp">Mot de passe:</label>
     <div class="col-sm-10">
     <input class="form-control" type="password" name="mdp" placeholder="Mot de passe" /> <br/>
     </div>

     <div class="form-group">
     <label class="control-label col-sm-2" for="mdp_confirm">Mot de passe:</label>
     <div class="col-sm-10">
     <input class="form-control" type="password" name="mdp_confirm" placeholder="Mot de passe" /> <br/>
     </div>
     </div>

     <input class="btn btn-primary pull-right" type="submit" value="Ajouter">

     </form>
        
        
            </div>
    </div>
     
    </div>
    <!-- /.modal-content --> 
</div>
      <!-- /.modal-dialog --> 


</div>

</body>

</html>


<script type="text/javascript">
$( document ).ready(function() {
$('#admin_grid').DataTable({
		 "bProcessing": true,
         "serverSide": true,
         "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/French.json"
            },
         "ajax":{
            url :"fetch_admins.php", // json datasource
            type: "post",  // type of method  ,GET/POST/DELETE
          },
          "columns": [
                { "data": "1", "bSearchable": false, "bSortable": false, "sWidth": "40px"},
                { "data": "2", "bSearchable": false, "bSortable": false, "sWidth": "40px"},
                { "data": "3", "bSearchable": false, "bSortable": false, "sWidth": "40px"},
                {
                    "data": "Inquiry", "bSearchable": false, "bSortable": false, "sWidth": "40px",
                    "data": function (data) {
                        return  '<form action="supprimer_admin.php" class="supprimer" method="post"><input type="hidden" name="id" value="'+data[0]+'"><input class="btn btn-danger" type="submit" value="Supprimer"  onclick="if(!confirm(`Voulez-vous Supprimer cet admin?\n(Cette action est définitive)`)) return false;"></form>'
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