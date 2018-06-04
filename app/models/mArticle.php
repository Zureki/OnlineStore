<?php
require "mDataBase.php";

class Article
{
	// Attributs de la class Article
	private 	$_idNum			=	0;
	private 	$_designation	=	"";
	private 	$_quantite		=	"";
	private 	$_prix			=	"";



	// Constructeur
	public function __construct($_nArticle, $_designation, $_quantite, $_prix)
	{
		$this	->		_idNum			=	$_nArticle;
		$this	->		_designation	=	$_designation;
		$this	->		_quantite		=	$_quantite;
		$this	->		_prix			=	$_prix;	
	}


	// Methode de la Class 

	// Methode de sauvegarde dans la base de données
	public function saveOnBase()
	{
		$bdd 		=	myConnection();

		$sqlInsert 	=	$bdd	->prepare("INSERT INTO article(nArticle,designation, prixUnitaire, quantiteStock) VALUES (:nArticle, :designation, :prix, :quantite)");


		$sqlInsert	->bindValue(':nArticle', $this->_idNum);
		$sqlInsert	->bindValue(':designation', $this->_designation);
		$sqlInsert	->bindValue(':prix', $this->_prix);
		$sqlInsert	->bindValue(':quantite', $this->_quantite);

		$sqlInsert	->execute();

		$bdd		=	null;
	}



	// Methode qui va modifier les articles
	public function updateOnBase($designation, $prix, $quantite)
	{
		$bdd		=	myConnection();

		
		$sqlUpdate	=	$bdd->prepare('UPDATE article SET prixUnitaire = :prix, quantiteStock = :stock WHERE designation = :designation');

		$sqlUpdate->execute(array(
									':prix'			=> 	$prix,
									':stock'		=>	$quantite,
									':designation'	=>	$designation
								  ));

		$bdd		=	null;
		echo $designation;
		echo "Execute";
	}





	// Methode qui va récuperer les designation des produits
	public function selectDesignation()
	{
		$bdd	=	myConnection();

		$sqlSelect	=	$bdd	->	query("SELECT designation FROM article ORDER BY designation");

		$resultat	=	$sqlSelect->fetchAll(PDO::FETCH_ASSOC);

		return $resultat;
	}






	// Methode qui va récuperer le prix de l'Articles
	public function getPrice($designation)
	{
		$bdd	=	myConnection();

		$sqlSelect	=	$bdd	->	prepare("SELECT `prixUnitaire` FROM article WHERE `designation`=:designation ");

		$sqlSelect	->bindValue(':designation', $designation);

		$sqlSelect	->	execute();

		$resultat	=	$sqlSelect->fetchAll(PDO::FETCH_ASSOC);

		return $resultat;
	}





	// Methode qui va récuperer la quantité en stock de l'Articles
	public function getStock($designation)
	{
		$bdd	=	myConnection();

		$sqlSelect	=	$bdd	->	prepare("SELECT quantiteStock FROM article WHERE designation=:designation");

		$sqlSelect	->	bindValue(':designation', $designation);

		$sqlSelect	->	execute();

		$resultat	=	$sqlSelect->fetchAll(PDO::FETCH_ASSOC);

		return $resultat;
	}



	// Methode qui renvoi tout le articles de la base
	public function getAllArticles()
	{
		$bdd	=	myConnection();

		$sqlSelect	=	$bdd	->	prepare("SELECT * FROM article ORDER BY designation");


		$sqlSelect	->	execute();

		$resultat	=	$sqlSelect->fetchAll(PDO::FETCH_ASSOC);

		return $resultat;
	}












}

?>