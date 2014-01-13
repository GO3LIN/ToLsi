<div class="row">
	<div class="col-sm-12">
		<h4>Créer une Vue</h4>
		<a href="vue/liste" class="btn" style="float: right"><span>Liste des vues</span></a>
		<p>Les champs marqués d'un (*) sont obligatoires :</p>
		<form method="post" action="vue/add" id="">

			<div class="row">
				<div class="col-sm-8">
					<label for="nom">(*) Nom :</label><br>
					<input type="text" name="nom" id="nom" class="inputtext input_middle required">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8">
					<label for="request">(*) Requete :</label><br>
					<textarea name="request" id="request" cols="62" rows="10"></textarea>
				</div>
			</div>
				
			<div class="row">
				<span class="btn btn-red link-submit" style="float: right"><input style="outline: medium none;" hidefocus="true" id="sendButton" value="Créer" type="submit"></span>
			</div>
		</form>		
	</div>
</div>
