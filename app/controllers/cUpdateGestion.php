<!-- Page qui va modifier des produits dans la base de données -->
<?php

require ('../models/mArticle.php');


	// On va vérifier si nos valeur ne sont pas null
	if(isset($_POST['designation']) && isset($_POST['prix']) && isset($_POST['quantite']) && isset($_POST['choosePrix']) && isset($_POST['chooseQuantite']))
	{
		// Récupère les valeur des champs du formulaire
		$designation 	= 	htmlspecialchars($_POST['designation']);
		$prix			= 	$_POST['prix'];
		$quantite 		= 	$_POST['quantite'];

		// Cration d'un nouvel Article pour récuperer les methodes
		$articles		=	new Article(999,999,999,999);

		// Current sera le résultat de la requete getPrice, il ne contient qu'un seul élémnt 
		$currentPrice	=	$articles	->	getPrice($designation);

		$currentStock	=	$articles	->	getStock($designation);

echo $designation;
			// Conditions : // Si mon radio vaut 1 j'ajoute le prix
							// Si mon radio vaut 2 je soustrait le prix

			if($_POST['choosePrix']	==	1)
			{
				echo ("Current Price : " .($currentPrice[0]['prixUnitaire']+$prix));
				$prix 	=	$currentPrice[0]['prixUnitaire'] + $prix;
					
			}
			else if($_POST['choosePrix'] == 2)
			{
				echo ("Current Price : ".($currentPrice[0]['prixUnitaire']-$prix));
				$prix 	=	$currentPrice[0]['prixUnitaire'] - $prix;
			}
			

				// Conditions : // Si mon radio vaut 1 j'ajoute le quantite
								// Si mon radio vaut 2 je soustrait le prix

			if($_POST['chooseQuantite']	==	1)
			{
				echo ("Current Stock : " .($currentStock[0]['quantiteStock']+$quantite));
				$quantite 	=	$currentStock[0]['quantiteStock'] + $quantite;
			}
			else if($_POST['chooseQuantite'])
			{
				echo ("Current Stock : " .($currentStock[0]['quantiteStock']-$quantite));
				$quantite 	=	$currentStock[0]['quantiteStock'] - $quantite;
			}


			// Update dans la base de donnée
			$articles	->	updateOnBase($designation, $quantite, $prix);

	}
	else
	{
		echo "Renseigner tout";
	}


?>