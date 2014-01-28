<div class="row">
	<div class="col-sm-12">
		<h4>Créer une Table</h4>
		<form action="<?php echo ROOT_URL.'/table/add';?>">
			<div class="row">
				<div class="col-sm-3 userLabel">
					<label for="nom">Nom:</label>
				</div>
				<div class="col-sm-5">
					<input type="text" name="nom" id="nom" class="inputtext input_middle">
				</div>
			</div>
			<br>
			<fieldset id="structureTable">
				<legend>Structure:</legend>
				<?php for($i=0;$i<4;$i++) : ?>
				<div class="col">
					<div class="row">
						<div class="col-sm-3">
							<input type="text" name="nomCol<?php echo $i;?>" placeholder="Nom de la colonne">
						</div>
						<div class="col-sm-3">
						    <select class="select_styled" name="typeCol<?php echo $i;?>">
						        <option value="">Type</option>
						        <option value="VARCHAR2">VARCHAR2</option>
						        <option value="NUMBER">NUMBER</option>
						        <option value="DATE">DATE</option>
						        <option value="CLOB">CLOB</option>
						        <option value="BLOB">BLOB</option>
						    </select>
						</div>
						<div class="col-sm-2">
							<input type="text" name="tailleCol<?php echo $i;?>" placeholder="Taille">
						</div>
						<div class="col-sm-2 input_styled" style="padding-top: 5px">
				            <input name="notNull<?php echo $i;?>" type="checkbox" id="notNull<?php echo $i;?>" value="notNull0">
		            		<label for="notNull<?php echo $i;?>">NOT NULL</label>
						</div>
						<div class="col-sm-2 input_styled" style="padding-top: 5px">
				            <input name="primary<?php echo $i;?>" type="checkbox" id="primary<?php echo $i;?>" value="primary<?php echo $i;?>">
		            		<label for="primary<?php echo $i;?>">PRIMARY</label>
						</div>
					</div>
					<div class="deleteCol">
						<a href="#" class="deleteColButton"><img src="<?php echo HTDOCS_URL;?>/images/icons/delete.png"></a>
					</div>
				</div>
				<?php endfor; ?>
				
			</fieldset>
			<div class="row">
				<div class="col-sm-2 col-sm-offset-9">
					<a style="outline: medium none;" id="addCol" hidefocus="true" href="#" class="btn"><span>Ajouter une colonne</span></a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2 col-sm-offset-9">
					<input type="hidden" name="clear" >
				</div>
			</div>
			<br>
			<div class="row">
				<span class="btn btn-red link-submit" style="float: right"><input style="outline: medium none;" hidefocus="true" id="addTableButton" value="Créer" type="submit"></span>
			</div>
		</form>
	</div>
</div>