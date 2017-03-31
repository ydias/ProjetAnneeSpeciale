<?php
	try {
		$db=new PDO('mysql:host=localhost;dbname=annee_speciale','root', '');
		$db->query('SET NAMES utf8');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		die('<p> La connexion a échoué. Erreur['.$e->getCode().'] : '.$e->getMessage().'</p>');
	}
	
	function envoie_mail($dest,$sujet,$mess){
		mail($dest, $sujet, $Mess);
	}
?>