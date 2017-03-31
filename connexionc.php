
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
		var_dump($email);
		var_dump($password);

		$req = $bdd->prepare('SELECT * FROM etudiant WHERE email = :email ');
		$req->execute(array(
			'email' => $email
    		));
    	$resultat = $req->fetch();
    	//var_dump($resultat);
    	$password_bon=password_verify($password, $resultat['mdp']);
    	var_dump($password_bon);

	if(!$resultat || $password_bon==false){
		echo'Mauvais identifiant ou mot de passe!';
	}
	else
	{
		session_start();
		$_SESSION['email']= $resultat['email'];
		$_SESSION['id']= $res;
		echo 'Vous êtes connecté !';
		header('Location: pageEtudient.php');
		var_dump($_SESSION);
	}
	
	}
	
	catch(PDOException $e)
	{
		die('<p> Erreur PDO[' .$e->getCode().'] : ' .$e->getMessage() . '</p>');
	}
	
	try
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		var_dump($email);
		var_dump($password);

		$req = $bdd->prepare('SELECT * FROM admin WHERE email = :email ');
		$req->execute(array(
			'email' => $email
    		));
    	$resultat = $req->fetch();
    	//var_dump($resultat);
    	$password_bon=password_verify($password, $resultat['mdp']);
    	var_dump($password_bon);

	if(!$resultat || $password_bon==false){
		echo'Mauvais identifiant ou mot de passe!';
	}
	else
	{
		session_start();
		$_SESSION['email']= $resultat['email'];
		$_SESSION['id']= $res;
		echo 'Vous êtes connecté !';
		header('Location: dashboard.php');
		var_dump($_SESSION);
	}
	}

?>
