<?php 
if(isset($_POST['boutonValider'])) { // formulaire soumis

	$titre = $_POST['titre']; // recuperation de la valeur saisie
	$nomficher = $_POST['nomficher'];
	$date = $_POST['dateV']; 
	$duree = $_POST['duree'];
	$groupe = $_POST['groupe'];
	$genre = $_POST['genre'];
	$verification = getChansonByName($connexion, $titre);

	if($verification == TRUE || count($verification) > 0) { // il existe une chanson avec ce titre, insertion
	
		$insertionT = insertVersion($connexion, $nomficher, $date, $duree, $groupe, $genre);
		//$insertionGr = insertGroupe($connexion, $groupe);
		//$insertionGe = insertGenre($connexion, $genre);
		
		if($insertionT == TRUE) {
			$message = "La version $nomficher de la chanson $titre a bien été ajoutée !";
		}
		else {
			$message = "Erreur lors de l'insertion de la version de la chanson $titre.";
		}
	}
	
	else {
		$message = "Il n'existe aucune chanson avec ce nom ($titre).";
	}
}

?>
