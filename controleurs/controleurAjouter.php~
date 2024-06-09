<?php 
if(isset($_POST['boutonValider'])) { // formulaire soumis

	$titre = $_POST['titre']; // recuperation de la valeur saisie
	$nomg = $_POST['nomg'];
	$datecreation = $_POST['datecreation'];
	$verification = getChansonByName($connexion, $titre);

	if($verification == FALSE || count($verification) == 0) { // pas de série avec ce nom, insertion
	
		$insertionT = insertChanson($connexion, $titre, $nomg, $datecreation);
		//$insertionGr = insertGroupe($connexion, $groupe);
		//$insertionGe = insertGenre($connexion, $genre);
		
		if($insertionT == TRUE) {
			$message = "La chanson $titre a bien été ajoutée !";
		}
		else {
			$message = "Erreur lors de l'insertion de la chanson $titre.";
		}
	}
	
	else {
		$message = "Une chanson existe déjà avec ce nom ($titre).";
	}
}

?>
