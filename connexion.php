
<?php

session_start();
if ($id!=0) erreur(ERR_IS_CO);
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=annee_speciale;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


	try
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$req = $bdd->prepare('SELECT * FROM etudiant WHERE email = :email AND mdp = :password');
		$req->execute(array(
			'email' => $email,
    		'password' => $password));
	  $resultat = $req->fetch();
	  echo'reusssi';
	}


	catch(PDOException $e)
	{
		die('<p> Erreur PDO[' .$e->getCode().'] : ' .$e->getMessage() . '</p>');
	}
	

	if(!$resultat){
		echo'Mauvais identifiant ou mot de passe!';
	}
	else
	{
		
		$_SESSION['id']= $resultat['id'];
		$_SESSION['email']= $resultat['email'];
		$_SESSION['password']= $resultat['mdp'];
		header('Location: pageEtudient.php');
		echo 'Vous êtes connecté !';

	}
	
	try
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$req = $bdd->prepare('SELECT * FROM admin WHERE email = :email AND mdp = :password');
		$req->execute(array(
			'email' => $email,
    		'password' => $password));
	  $resultat2 = $req->fetch();
	  echo'reusssi';
	}

	catch(PDOException $e)
	{
		die('<p> Erreur PDO[' .$e->getCode().'] : ' .$e->getMessage() . '</p>');
	}
	
	if(!$resultat2){
		echo'Mauvais identifiant ou mot de passe!';
	}
	else
	{
		
		$_SESSION['id']= $resultat2['id'];
		$_SESSION['email']= $resultat2['email'];
		$_SESSION['password']= $resultat2['mdp'];
		header('Location: dashboard.php');
		echo 'Vous êtes connecté !';

	}

?>
