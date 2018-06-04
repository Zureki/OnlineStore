<!-- Page qui va retourner un JSON composé de la designation des articles -->
<?php

require "../models/mArticle.php";

// Création d'un objet null
$allProduit	=	new Article(null, null, null, null);

// Stockage du retour de la requete qui renvoi un association
$req 	=	$allProduit->getAllArticles();


// Encode de la requete
$json = json_encode($req);

$fichier	=	fopen('articles.json', 'w+');
fwrite($fichier, $json);

fclose($fichier);

var_dump($json);

?>