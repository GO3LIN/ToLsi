<div class="row">
	<div class="col-sm-12">
		<h4>Créer un Trigger</h4>
		<p>Les champs marqués d'un (*) sont obligatoires :</p>
		<form method="post" action="" id="">

			<div class="row">
				<div class="col-sm-8">
					<label for="nom">(*) Nom :</label><br>
					<input type="text" name="nom" id="nom" class="inputtext input_middle required">
				</div>
			</div>
			
			<div class="field_select">
    <select class="select_styled">
        <option value="">Subject</option>
        <option value="Feedback">Feedback</option>
        <option value="Support Question">Support Question</option>
        <option value="Website Question">Website Question</option>
        <option value="Other Question or Comment">Other Question or Comment</option>
    </select>
	        </div>
				
			<div class="row">
				<span class="btn btn-red link-submit" style="float: right"><input style="outline: medium none;" hidefocus="true" id="sendButton" value="Créer" type="submit"></span>
			</div>
		</form>
		
	</div>
</div>