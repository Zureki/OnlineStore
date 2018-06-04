<!DOCTYPE html>
<html>
	<head>
		
		<title>Online Store</title>
		
		<!-- Encodage des caractère spéciaux -->
		<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Library BootStrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Importation de JQUERY -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

		<!-- Thème BootStrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Library BootStrap liées a JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- Css footer -->
		<link rel="stylesheet" href="css/footer-distributed.css">

		<!-- Css du contenu de mes pages -->
		<link rel="stylesheet" href="css/style.css">

		<!-- Css du diaporama -->
		<link rel="stylesheet" type="text/css" href="css/diaporama.css">

		<!-- Icone Naviguateur -->
		<link rel="icon" href="img/38243.ico" />

	</head>

<body>

	<div class="container-fluid" id="div_header">
		<?php  include('../app/views/header.php');?>
		
	</div>

	<!-- NavBar Horizontal -->
	<?php  include('../app/views/navbar.php');?>

<div id="corps_body">

	<div class="row">

  		<div class="col-sm-4 hidden-sm"><p>FLUX RSS</p>

  		</div>

			<div class="col-md-8 col-sm-12" id="col_right">

				<?php  include('../app/views/slider.php');?>



			</div>
	</div>

</div>



<div id="footer-bas">
	<?php include('../app/views/footer.php') ?>
</div>
	


	
<script type="text/javascript" src="js/diaporama.js"></script>
<script type="text/javascript" src="js/scriptView.js"></script>
</body>
</html>