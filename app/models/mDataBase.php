<?php
	   
// Fonction de connexion a la base de données 
function myConnection()
{
	// Test de connexion a la base de données 
	try
	{
		$bdd	=	new PDO('mysql:host=localhost;dbname=onlinestore;charset=utf8', 'root', '');

		$bdd	->	setAttribute(PDO::ATTR_ERRMODE,	PDO::ERRMODE_EXCEPTION);

		return $bdd;
	}
	// Si elle est echoue
	catch (PDOException $e)
	{
		echo "Connection Failed: " .	$e 	->	getMessage();
	}
}

?>