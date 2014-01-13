<div class="row">
	<div class="col-sm-12">
		<h4 id="userTitle">Créer une vue</h4>
		<p>Les champs marqués d'un (*) sont obligatoires :</p>
		
		<form method="post" action="" id="viewForm">
			<div class="row">
				<div class="col-sm-3 userLabel">
					<label for="nom">(*) Nom :</label>
				</div>
				<div class="col-sm-5">
					<input type="text" name="nom" id="nom" class="inputtext input_middle">
				</div>
				<div class="col-sm-4 errorField"></div>
			</div>
			<div class="row">
				<div class="col-sm-3 userLabel">
					<label for="as">(*) As :</label>
				</div>
				<div class="col-sm-5">
					<input type="text" name="as" id="as" class="inputtext input_middle">
				</div>
				<div class="col-sm-4 errorField"></div>
			</div>
			<div class="row">
				<span class="btn btn-red link-submit" style="float: right"><input style="outline: medium none;" hidefocus="true" id="sendButton" value="Créer" type="submit"></span>
			</div>

		</form>

	</div>
</div>