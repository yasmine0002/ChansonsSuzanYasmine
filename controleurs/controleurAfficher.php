<?php 
$message = "";

// recupération des séries
$CHANSON = getInstances($connexion, "CHANSON");
if($CHANSON == null || count($CHANSON) == 0) {
	$message .= "Aucune chanson n'a été trouvée dans la base de données !";
}


$critiques = getInstances($connexion, "Critiques");
if($critiques == null || count($critiques) == 0) {
	$message .= "Aucune critique n'a été trouvée dans la base de données !";
}

/*
** À vous de jouer : lister les critiques en vous inspirant du code ci-dessus.
** Vous pourrez plus tard améliorer le code en affichant chaque série avec les
** critiques qui la concernent !
*/

// recupération des actrices
$GROUPE = getInstances($connexion, "GROUPE");
if($GROUPE == null || count($GROUPE) == 0) {
	$message .= "Aucun artiste n'a été trouvée dans la base de données !";
}

/*
// recupération des épisodes numérotés 1 et 2 avec une requête préparée
$tabEpisodes = getEpisodesPrepared($connexion);
if($tabEpisodes == null) {
	$message .= "Aucun épisode n'a été trouvé dans la base de données !";
}
else {
	$episodes1 = $tabEpisodes["episodes1"];
	$episodes2 = $tabEpisodes["episodes2"];
}
*/
?>
