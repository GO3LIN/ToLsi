<div class="row">
	<h4>Exporter la base de donnée</h4>
	<form action="exporter" method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-3 userLabel">
				<label for="exporterFile">Fichier destination:</label>
			</div>
			<div class="col-sm-5">
				<input type="file" name="exporterFile" id="exporterFile" class="inputtext input_middle">
			</div>
		</div>
		<div class="row">
			<span class="btn btn-red link-submit" style="float: right"><input style="outline: medium none;" hidefocus="true" id="addTableButton" value="Exporter" type="submit"></span>
		</div>
	</form>
</div>