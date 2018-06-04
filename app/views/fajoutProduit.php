<!-- Formulaire d'Ajout des Articles -->
<h3 class="titre-action">Ajouter vos produits</h3>

<br>


	<!-- Name Input -->
	<div class="form-group">
	  <label class="control-label col-sm-2" for="email">Désignation Produit:</label>
	    <div class="col-sm-10">
	    	<input class="form-control" id="designation" type="text" name="designation" placeholder="Saisir le nom du produit">
	    </div>
	</div>


	<!-- Quantite Input -->
	<div class="form-group">
	  <label class="control-label col-sm-2">Quantité à ajouter:</label>
	    <div class="col-sm-10">          
	      <input type="number" id="quantite" class="form-control" placeholder="Saisir Quantité"  required="required" name="quantite">
	    </div>
	</div>



	<!-- Prix Input -->
	<div class="form-group">
	  <label class="control-label col-sm-2" for="pwd">Prix Produit:</label>
	    <div class="col-sm-10">          
	      <input type="number" id="prix" class="form-control"  placeholder="Saisir Prix" required="required" name="prix">
	    </div>
	</div>


	<!-- Numero du produits -->
	<div class="form-group">
	  <label class="control-label col-sm-2" for="pwd">Numéro Produit:</label>
	    <div class="col-sm-10">          
	      <input type="number" id="numero" class="form-control"  placeholder="Saisir Numéro" required="required" name="numero">
	    </div>
	</div>


	<!-- Boutons d'envoi -->
	<div class="form-group">        
	  <div class="col-sm-offset-2 col-sm-10">
	    <button type="submit" class="myButton" id="buttonAjoutProduit">Ajouter</button>
	    <button type="reset"  class="myButton">Reset</button>
	  </div>
	</div>
