<?php
include_once("BDD/connection.php");


// Constitution mailing list pour etudiants refusés.

$sql="SELECT email FROM `etudiant` where etat_dossier='Refuse'" ;
$res=mysqli_query($conn, $sql) or die("error to fetch student data");
$mail_resultat=mysqli_num_rows($res);
$refus='';

if($mail_resultat!=0){
while( $row = mysqli_fetch_row($res) ) { 
		$data[] = $row;
	}	


foreach ($data as $key) {
	$refus.=$key[0].',';
}
}

$bouton_refus='<a class="btn btn-success btn-sm" href="mailto:?bcc='.$refus.'">Candidats refusés</a>';


//////////////////////////////////////////////////////

// Constitution mailing list pour etudiants non confirmés

$sql_nc="SELECT email FROM `etudiant` where etat_dossier='Non confirme'" ;
$res_nc=mysqli_query($conn, $sql_nc) or die("error to fetch student data");

$non_confirme='';
$mail_resultat=mysqli_num_rows($res_nc);

if($mail_resultat!=0){

	while( $row_nc = mysqli_fetch_row($res_nc) ) { 
		$data_nc[] = $row_nc;
	}	

	
	foreach ($data_nc as $key_nc) {
		$non_confirme.=$key_nc[0].',';
	}
}

$bouton_non_confirme='<a class="btn btn-success btn-sm" href="mailto:?bcc='.$non_confirme.'">Candidats non confirmés</a>';

///////////////////////////////////////////////////////

// Constitution mailing list pour etudiants acceptés

$sql_ac="SELECT email FROM `etudiant` where etat_dossier='Accepte'" ;
$res_ac=mysqli_query($conn, $sql_ac) or die("error to fetch student data");

$accepte='';
if($mail_resultat!=0){

	while( $row_ac = mysqli_fetch_row($res_ac) ) { 
		$data_ac[] = $row_ac;
	}	


	foreach ($data_ac as $key_ac) {
		$accepte.=$key_ac[0].',';
	}

}
$bouton_accepte='<a class="btn btn-success btn-sm" href="mailto:?bcc='.$accepte.'">Candidats acceptés</a>';
///////////////////////////////////////////////////////

// Constitution mailing list pour etudiants en attente

$sql_at="SELECT email FROM `etudiant` where etat_dossier='En attente de reponse'" ;
$res_at=mysqli_query($conn, $sql_at) or die("error to fetch student data");
$attente='';

if($mail_resultat!=0){

	while( $row_at = mysqli_fetch_row($res_at) ) { 
			$data_at[] = $row_at;
		}	


	foreach ($data_at as $key_at) {
		$attente.=$key_at[0].',';
	}
}
$bouton_attente='<a class="btn btn-success btn-sm" href="mailto:?bcc='.$attente.'">Candidats en attente</a>';

///////////////////////////////////////////////////////

// Constitution mailing list pour etudiants en liste complémentaire

$sql_lc="SELECT email FROM `etudiant` where etat_dossier='En liste complementaire'" ;
$res_lc=mysqli_query($conn, $sql_lc) or die("error to fetch student data");
$liste_complementaire='';

if($mail_resultat!=0){

	while( $row_lc = mysqli_fetch_row($res_lc) ) { 
		$data_lc[] = $row_lc;
	}	


	foreach ($data_lc as $key_lc) {
		$liste_complementaire.=$key_lc[0].',';
	}
}

$bouton_liste_complementaire='<a class="btn btn-success btn-sm" href="mailto:?bcc='.$liste_complementaire.'">Candidats en liste complementaire</a>';
