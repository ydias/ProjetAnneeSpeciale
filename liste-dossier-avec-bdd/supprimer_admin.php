<?php
include_once("connection.php");
$id=$_POST['id'];

include_once("Class_action.php");
$sql="select nom,prenom from `admin` WHERE `id`=".$id;
$a = action('Supprimer_admin', 'Suppression d\'un compte administrateur.', date("Y-m-d"), 0, $_SESSION['login'], $sql[0] . ' ' . $sql[1]);
$a->enregistrer();

$sql="DELETE FROM `admin` WHERE `id`=".$id;
mysqli_query($conn, $sql);
header('location:liste_admins.php');
