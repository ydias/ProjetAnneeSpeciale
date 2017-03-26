<?php
/* Database connection start */
/*$servername="mysql.hostinger.fr";
$dbname="u572838726_annee";
$username="u572838726_annee";
$password="0zEhTeuYnW7M";
*/


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>