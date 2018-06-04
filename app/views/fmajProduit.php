<!-- Formulaire des mis a jour des Articles -->
<h3 class="titre-action">Modifier vos produits</h3>

<br>


	<!-- Designation Input -->
	<div class="form-group">
	  <label class="control-label col-sm-2" for="email">Désignation:</label>
	    <div class="col-sm-10">
	    	<select class="form-control" id="selectProduit" name="select">
	    		<option>Séléctionner le produit à modifier</option>
	    	</select>
	    </div>
	</div>


	<!-- Radio Input -->
	<div class="form-group">
	    <div class="col-sm-10">  

	    	<div id="cell">        
	      		<input type="radio" value="1" id="chooseQuantite1" name="chooseQuantite" class="form-control" required="required"><i>Ajouter au Stock de base</i>
	      </div>

	      <br>

	      <div id="cell">
	     	 <input type="radio" value="2" id="chooseQuantite2" name="chooseQuantite" class="form-control" required="required"><i>Soustraire au Stock de base</i>
	      </div>
	    </div>
	</div>




	<!-- Quantite Input -->
	<div class="form-group">
	  <label class="control-label col-sm-2">Quantité:</label>
	    <div class="col-sm-10">          
	      <input type="number" id="quantiteRentre" class="form-control" placeholder="Saisir Quantité"  required="required" name="quantite">
	    </div>
	</div>




	<!-- Radio Input -->
	<div class="form-group">
	    <div class="col-sm-10">  

	    	<div id="cell">        
	      		<input type="radio" value="1" id="choosePrix1" name="choose" class="form-control" required="required"><i>Ajouter au Prix de base</i>
	      </div>

	      <br>

	      <div id="cell">
	     	 	<input type="radio" value="2" id="choosePrix2" name="choose" class="form-control" required="required"><i>Soustraire au Prix de base</i>
	      </div>
	    </div>
	</div>




	<!-- Prix Input -->
	<div class="form-group">
	  <label class="control-label col-sm-2" for="pwd">Prix:</label>
	    <div class="col-sm-10">          
	      <input type="number" id="prixRentre" class="form-control"  placeholder="Saisir Prix" required="required" name="prix">
	    </div>
	</div>



	<!-- Boutons d'envoi -->
	<div class="form-group">        
	  <div class="col-sm-offset-2 col-sm-10">
	    <button type="button" class="myButton" id="buttonModifProduit">Modifier</button>
	    <button type="reset"  class="myButton">Reset</button>
	  </div>
	</div>
