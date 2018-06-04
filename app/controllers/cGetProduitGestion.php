<!-- Page qui va retourner un JSON composé de la designation des articles -->
<?php

require "../models/mArticle.php";

// Création d'un objet null
$designationProduit	=	new Article(null, null, null, null);

// Stockage du retour de la requete qui renvoi un association
$req 	=	$designationProduit->selectDesignation();


// Encode de la requete
$json = json_encode($req);

$fichier	=	fopen('json_designation.json', 'w+');
fwrite($fichier, $json);

fclose($fichier);

?>