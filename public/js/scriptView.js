// Script qui va récuperer les Designation de mes Article
// Puis qui va générer du code html dans l'endroit indiquer par l'ID
$( document ).ready(function() 
{
	// Requete qui va générer le fichier JSON
	$.ajax({
		type: "POST",
		url: "../controllers/cGetProduitGestion.php",

		success : function(data){

		}
	})

	// Lecture du fichier JSON
	$.getJSON("../controllers/json_designation.json",
		function(produit)
		{
			for(var i = 0, len = produit.length ; i < len ; i++)
			{
				$("#selectProduit").append(`
					<option value=`+ produit[i].designation +`>`+ produit[i].designation +`</option>`);
			}
		});
});






// Script qui va récuperer les articles
// Puis qui va générer du code html dans l'endroit indiquer par l'ID
$( document ).ready(function() 
{
	// Requete qui va générer le fichier JSON
	$.ajax({
		type: "POST",
		url: "../controllers/cGetAllArticle.php",

		success : function(data){
		}
	})

	// Lecture du fichier JSON
	$.getJSON("../controllers/articles.json",
		function(produit)
		{
			for(var i = 0, len = produit.length ; i < len ; i++)
			{
				$("#liste-articles").append(`
					<label id="label-articles">
						<p><i>Désignation:</i> <b>` + produit[i].designation + `</b></p>
						<p><i>Prix: </i><b>` + produit[i].prixUnitaire + ` euros</b></p>
						<p><i>Quantite: </i><b>` + produit[i].quantiteStock + ` en stock</b></p>
					</label><br>`);
			}
		});
});



$(document).ready(function(){
    $("#icone-hamburger").click(function(){
        $("#navBar_hori").show('slow');
    });
});


$(document).ready(function(){
    $("#croix-menu").click(function(){
        $("#navBar_hori").hide('slow');
    });
});