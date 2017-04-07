function utilisateursExiste($bd,$email,$password)
{
	try
	{
		$req = $bd->prepare('SELECT * FROM (Nom de la base la table) WHERE Email = :email AND Password = :password');
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
		$req->execute();
		return $req->fetch() != false;
	}
	catch(PDOException $e)
	{
		die('<p> Erreur PDO[' .$e->getCode().'] : ' .$e->getMessage() . '</p>');
	}
}