<?php 

// connexion à la BD, retourne un lien de connexion
function getConnexionBD() {
	$connexion = mysqli_connect(SERVEUR, UTILISATRICE, MOTDEPASSE, BDD);
	if (mysqli_connect_errno()) {
	    printf("Échec de la connexion : %s\n", mysqli_connect_error());
	    exit();
	}
	mysqli_query($connexion,'SET NAMES UTF8'); // noms en UTF8
	return $connexion;
}

// déconnexion de la BD
function deconnectBD($connexion) {
	mysqli_close($connexion);
}

// nombre d'instances d'une table $nomTable
function countInstances($connexion, $nomTable) {
	$requete = "SELECT COUNT(*) AS nb FROM $nomTable";
	$res = mysqli_query($connexion, $requete);
	if($res != FALSE) {
		$row = mysqli_fetch_assoc($res);
		return $row['nb'];
	}
	return -1;  // valeur négative si erreur de requête (ex, $nomTable contient une valeur qui n'est pas une table)
}

// retourne les instances d'une table $nomTable
function getInstances($connexion, $nomTable) {
	$requete = "SELECT * FROM $nomTable";
	$res = mysqli_query($connexion, $requete);
	$instances = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $instances;
}
/*
// retourne les instances d'épisodes numérotés 1 et 2 
function getEpisodesPrepared($connexion) {
	$requete = "SELECT titre FROM Episodes WHERE numero = ?";
	$stmt = mysqli_prepare($connexion, $requete);
	if($stmt == false) {
		return null;
	}
	mysqli_stmt_bind_param($stmt, "i", $numEpisode); // lier la variable $var au paramètre de la requête
	// $var à 1 pour afficher les épisodes numérotés 1
	$numEpisode = 1;
	mysqli_stmt_execute($stmt); // exécution de la requête
	$episodes1 = mysqli_stmt_get_result($stmt);  // récupération des tuples résultats dans la variable $episodes1

	// $var à 2 pour afficher les épisodes numérotés 2
	$numEpisode = 2;
	mysqli_stmt_execute($stmt); // pas besoin de lier, exécution directe de la requête
	$episodes2 = mysqli_stmt_get_result($stmt);  // récupération des tuples résultats dans la variable $episodes1
	return array("episodes1" => $episodes1, "episodes2" => $episodes2);
}
*/

// retourne les informations sur la série nommée $nomSerie
function getChansonByName($connexion, $titre) {
	$titre = mysqli_real_escape_string($connexion, $titre); // sécurisation de $nomSerie
	$requete = "SELECT * FROM CHANSON WHERE titre = '". $titre . "'";
	$res = mysqli_query($connexion, $requete);
	$titre = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $titre;
}

// insère une nouvelle série nommée $nomSerie
function insertChanson($connexion, $titre, $nomg, $datecreation) {
	$titre = mysqli_real_escape_string($connexion, $titre);
	$datecreation = mysqli_real_escape_string($connexion, $datecreation);
	$nomg = mysqli_real_escape_string($connexion, $nomg); // au cas où $nomSerie provient d'un formulaire
	$requete1 = "INSERT INTO CHANSON (titre, nomg, datecreation) VALUES ('". $titre . "','". $nomg . "','". $datecreation . "' )";
	$res1 = mysqli_query($connexion, $requete1);
	return $res1;
}

function insertGroupe($connexion, $groupe) {
	$groupe = mysqli_real_escape_string($connexion, $groupe); // au cas où $nomSerie provient d'un formulaire
	$requete = "INSERT INTO GROUPE (nomg) VALUES ('". $groupe . "')";
	$res = mysqli_query($connexion, $requete);
	return $res;
}


function estEgal($connexion, $titre) {
	$titre = mysqli_real_escape_string($connexion, $titre);
	$requete = "SELECT COUNT(*) FROM CHANSON where titre like '". $titre . "'";
	if ($requete == 0){
		return false;
		}
	else {
		return true;
		}		
 }


function search($connexion, $table, $valeur) {
	$valeur = mysqli_real_escape_string($connexion, $valeur); // au cas où $valeur provient d'un formulaire
	if($table == 'CHANSON')
		$requete = 'SELECT * FROM CHANSON WHERE titre LIKE \'%'.$valeur.'%\';';
	else  // $table == 'Actrices'
	$requete = 'SELECT * FROM GROUPE WHERE nomg LIKE \'%'.$valeur.'%\' OR nomg LIKE \'%'.$valeur.'%\';';
	$res = mysqli_query($connexion, $requete);
	$instances = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $instances;
}


function insertVersion($connexion, $nomficher, $date, $duree, $groupe, $genre)
{
	$nomficher = mysqli_real_escape_string($connexion, $nomficher);
	$date = mysqli_real_escape_string($connexion, $date);
	$duree = mysqli_real_escape_string($connexion, $duree);
	$groupe = mysqli_real_escape_string($connexion, $groupe);
	$genre = mysqli_real_escape_string($connexion, $genre);
	//$nomg = mysqli_real_escape_string($connexion, $nomg); // au cas où $nomSerie provient d'un formulaire
	$requete1 = "INSERT INTO VERSION (nomfichier, date, duree) VALUES ('". $nomficher . "','". $date . "','". $duree . "')";
	$res1 = mysqli_query($connexion, $requete1);
	return $res1;
}

function creerListe($connexion)
{
	//$requete = 
}


?>
