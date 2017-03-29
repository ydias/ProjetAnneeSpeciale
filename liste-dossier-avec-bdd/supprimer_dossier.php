<?php
include_once("connection.php");
$id=$_POST['id'];
$sql="DELETE FROM `etudiant` WHERE `id`=".$id;
mysqli_query($conn, $sql);
header('location:liste_dossiers.php');