<?php
include_once("connection.php");
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$mdp=password_hash($_POST['mdp'], PASSWORD_BCRYPT);
$sql="INSERT INTO `admin` (`nom`, `prenom`, `email`, `mdp`) VALUES ('".$nom."','".$prenom."','".$email."','".$mdp."')";
//echo $sql;
mysqli_query($conn, $sql);
header('location:liste_admins.php');
?>