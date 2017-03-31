<?php
include_once("connection.php");
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$mdp=password_hash($_POST['mdp'], PASSWORD_BCRYPT);
$sql="INSERT INTO `admin` (`nom`, `prenom`, `email`, `mdp`) VALUES ('".$nom."','".$prenom."','".$email."','".$mdp."')";
//echo $sql;

include_once("Class_action.php");
$a = action('Ajout_admin', 'Ajout d\'un compte administrateur.', date("Y-m-d"), 0, $_SESSION['login'], $nom . ' ' . $prenom);
$a->enregistrer();

mysqli_query($conn, $sql);
header('location:liste_admins.php');
?>
