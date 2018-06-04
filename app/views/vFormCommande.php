<!DOCTYPE html>

<html>

	<head>

		<?php include('entete.php'); ?>

	</head>

<body>

	<div class="container-fluid" id="div_header">
		<?php include('header.php'); ?>
		
	</div>

	<!-- NavBar Horizontal -->
	<?php include('navbar.php');?>

<div class="container">
  
  <form class="form-horizontal" action="#">


    <fieldset>

      <h3>Commandez vos produits</h3>
   

	    <!-- Name Input -->
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="email">Nom:</label>
	        <div class="col-sm-10">
	          <input type="text" class="form-control" id="email" placeholder="Saisir Nom" name="email">
	        </div>
	    </div>


	    <!-- E-Mail Input -->
	    <div class="form-group">
	      <label class="control-label col-sm-2">E-Mail:</label>
	        <div class="col-sm-10">          
	          <input type="email" class="form-control" placeholder="Saisir E-Mail" >
	        </div>
	    </div>


	    <!-- Select produit -->
	    <div class="form-group">
	      <label class="control-label col-sm-2" >Produits:</label>
	        <div class="col-sm-10">  

	          <input type="text" name="produit" class="form-control" placeholder="Désignation du produit">
	          
	        </div>
	    </div>



	    <!-- Quantité Input -->
	    <div class="form-group">
	      <label class="control-label col-sm-2" for="pwd">Quantités:</label>
	        <div class="col-sm-10">          
	          <input type="number" class="form-control"  placeholder="Saisir Quantités">
	        </div>
	    </div>


	    <!-- Boutons d'envoi -->
	    <div class="form-group">        
	      <div class="col-sm-offset-2 col-sm-10">
	        <button type="submit" class="myButton">Submit</button>
	      </div>
	    </div>

    </fieldset>
  </form>
</div>





	<!-- Footer du site -->
	<footer class="footer-distributed">

		<div class="footer-left">

			<p class="footer-links">Gabriel Gaggini</p>

			<p>Online Store &copy; 2018</p>

		</div>

	</footer>


<script type="text/javascript" src="../../public/js/scriptView.js"></script>
<script type="text/javascript" src="../../public/js/scriptData.js"></script>
<script type="text/javascript" src="../../public/js/menutopbar.js"></script>
	
</body>
</html>