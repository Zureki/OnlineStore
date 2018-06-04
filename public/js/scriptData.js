 /* Ajout des Produits */
$("#buttonAjoutProduit").click(function(e){
	// Récupere les valeurs des champs
	var designation		=	$("#designation")	.val();
	var quantite		=	$("#quantite")		.val();
	var prix			=	$("#prix")			.val();
	var numero			=	$("#numero")		.val();

	alert(designation);

		// Requete Ajax vers le Controller d'Ajout de Produit
		$.ajax({
			type	: 	"POST",
			url		: 	"../controllers/cSetGestion.php",
			data 	: 	{	designation : designation,
							quantite 	: quantite,
							prix	 	: prix,
							numero	 	: numero},

			success	: 	function(data){
				$("#validation_ajout")
					.text("Ajout success")
					.fadeIn(2000, function(){
						$(this).fadeOut(6000, function(){

						});
					});

				//location.reload();
			}
 		})
});






/* Modification d'un Produits */
$("#buttonModifProduit").click(function(e){
	// Récupere les valeurs des champs 
	var designation		=	$("#selectProduit")		.val();
	var quantite		=	$("#quantiteRentre")	.val();
	var prix			=	$("#prixRentre")		.val();
	
	var choosePrix		=	0;
	var chooseQuantite	=	0;

	alert(designation);
	alert(quantite);
	alert(prix);


		// Condition liées  l'ajout ou au soustrait de la quantite
		if($("#chooseQuantite1").is(":checked"))
		{
			alert("Quantite Value 1 is Checked");
			chooseQuantite 	=	1;
		}
		else
		{
			alert("Quantite Value 2 is Checked");
			chooseQuantite 	=	2;
		}

			// Condition liées  l'ajout ou au soustrait du prix
			if($("#choosePrix1").is(":checked"))
			{
				alert("Prix Value 1 is Checked");
				choosePrix 	=	1;
			}
			else
			{
				alert("Prix Value 2 is Checked");
				choosePrix 	=	2;
			}


		// Requete Ajax vers le Controller d'Ajout de Produit
		$.ajax({
			type	: 	"POST",
			url		: 	"../controllers/cUpdateGestion.php",
			data 	: 	{	designation 	: designation,
							quantite 		: quantite,
							prix	 		: prix,
							choosePrix	 	: choosePrix,
							chooseQuantite	: chooseQuantite},

			success	: 	function(data){
			
				$("#validation_modif")
					.text("Modification success")
					.fadeIn(2000, function(){
						$(this).fadeOut(6000, function(){

						});
					});

				location.reload();
			}
 		})
});