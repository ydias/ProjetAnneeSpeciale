<?php
include_once("connection.php");
$login=$_POST['login'];
$mdp=$_POST['mdp'];
$sql="INSERT INTO `admin` (`login`, `mdp`) VALUES ('".$login."','".$mdp."')";
echo $sql;
mysqli_query($conn, $sql);
header('location:liste_admins.php');
?>