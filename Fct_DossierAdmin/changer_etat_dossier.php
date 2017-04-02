<?php
include_once("connection.php");
$id=$_POST['id'];
$etat_dossier=$_POST['etat_dossier'];
$sql="UPDATE `etudiant` SET `etat_dossier` ='".$etat_dossier."' WHERE `id` =". $id;
echo $sql;



mysqli_query($conn, $sql);
header('location:liste_dossiers.php');