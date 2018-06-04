<!DOCTYPE html>

<html>

	<head>

		<?php include('entete.php'); ?>

	</head>

<body>

	<!-- Div du Header -->
	<div class="container-fluid" id="div_header">
		
		<!-- Header -->
		<?php include('header.php'); ?>
		
	</div>




	<!-- NavBar Horizontal -->
	<?php include('navbar.php'); ?>




	<!-- Début des Formulaire (Envoi et Modification) -->
	<div class="row" id="formulaire-ajout-modif">

  		<div class="col-md-4" id="card-left">

  			<!-- Form qui ajoute les produits  -->
			<form class="form-horizontal" action="#" method="POST">

				<!-- Formulaire ajout des produits -->
				<?php include('fajoutProduit.php');?>
				<p id="validation_ajout"></p>

			</form>

  		</div>


  		<!-- Listes des Articles de la base de donnée -->
		<div class="col-md-4" id="one-article">

			<h3 class="titre-action">Produits en Stock</h3>
			<br>

			<?php include('liste_articles.php'); ?>

		</div>
  			


		<!-- Formulaire de mise a jour de donnés -->
		<div class="col-md-4" id="card-right">

			<form class="form-horizontal" action="#" method="POST">

				<?php  include('fmajProduit.php');?>
				<p id="validation_modif"></p>

			</form>

		</div>

		
	</div>





<!-- Footer du site -->
<?php include ('footer.php'); ?>



<!-- <script type="text/javascript" src="../../public/js/script.js"></script>
 -->	

 <script type="text/javascript" src="../../public/js/scriptView.js"></script>
 <script type="text/javascript" src="../../public/js/scriptData.js"></script>
 <script type="text/javascript" src="../../public/js/menutopbar.js"></script>
</body>
</html>