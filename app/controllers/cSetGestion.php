<!-- Page qui va ajouter des produits dans la base de données -->
<?php

require ('../models/mArticle.php');

// Récupère les valeur des champs du formulaire
$designation 	= 	htmlspecialchars($_POST['designation']);
$prix			= 	htmlspecialchars($_POST['prix']);
$quantite 		= 	htmlspecialchars($_POST['quantite']);
$numero			=	htmlspecialchars($_POST['numero']);



	// On va vérifier si nos valeur ne sont pas null
	if(isset($designation) && isset($prix) && isset($quantite) && isset($numero))
	{
		// Création d'un Objet qui avec comme parametre les information du formualaire
		$articles	=	new Article($numero, $designation, $prix, $quantite);
		// Sauvegarde de l'Article dans la base de donnée
		$articles	->	saveOnBase();
	}


?>