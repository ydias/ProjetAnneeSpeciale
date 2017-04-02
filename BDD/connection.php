<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "annee_spe";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

	//permet de gérer les accents sur DataTables
	mysqli_query($conn,"SET character_set_client=utf8");
	mysqli_query($conn,"SET character_set_connection=utf8");
	mysqli_query($conn,"SET character_set_results=utf8");
	//

	
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>