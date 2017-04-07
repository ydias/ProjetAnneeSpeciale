<?php
include_once("connection.php");
$id=$_POST['id'];
$etat_dossier=$_POST['etat_dossier'];
$sql="UPDATE `etudiant` SET `etat_dossier` ='".$etat_dossier."' WHERE `id` =". $id;
echo $sql;



mysqli_query($conn, $sql);
header('location:liste_dossiers.php');
$sql = "select `nom`,`prenom` from `etudiant` WHERE `id` =". $id;
$a = new action('Changer_le_statut_de_dossier' ,'Change le dossier en ' . $etat_dossier , date("d-m-Y"), 1, $sql[0] . $sql[1], 'admin');
$a->enregistrer();