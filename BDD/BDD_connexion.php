<?php
try
{
	// Sous WAMP (Windows)
	$bdd = new PDO('mysql:host=localhost;dbname=annee_spe;charset=utf8', 'root', '');
				/*		 le nom d'hôte	la base de données 				le login  le mot de passe*/
}
catch (Exception $e)	/*On effectue une exception pour eviter que la ligne de connexion a la base de donné ne s'affiche si jammais elle devient fausse*/
{
        die('Erreur : ' . $e->getMessage());
}

?>
