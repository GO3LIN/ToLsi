<div class="row">
	<div class="col-sm-12">
		<h4>Créer un rôle</h4>
		<p>Les champs marqués d'un (*) sont obligatoires :</p>
		<form method="post" action="role/add" id="roleForm">
			<div class="row">
				<div class="col-sm-3 userLabel">
					<label for="nom">(*) Nom :</label>
				</div>
				<div class="col-sm-5">
					<input type="text" name="nom" id="nom" class="inputtext input_middle required">
				</div>
				<div class="col-sm-4 errorField"></div>
			</div>

			<div class="row">
				<div class="col-sm-8 col-sm-offset-4">
					 <div class="input_styled checklist"><div class="rowCheckbox checkbox-large"><div class="custom-checkbox"><input style="outline: medium none;" hidefocus="true" name="identifiedRole" id="identifiedRole" value="identifiedRole" type="checkbox"><label class="" for="identifiedRole">Identifié par mot de pass</label></div></div></div>
				</div>
			</div>
			<div id="identifiedPass" style="display: none">
				<div class="row">
					<div class="col-sm-3 userLabel">
						<label for="password">Mot de pass :</label>
					</div>
					<div class="col-sm-5">
						<input type="password" name="password" id="password" class="inputtext input_middle">
					</div>
					<div class="col-sm-4 errorField"></div>
				</div>
				<div class="row">
					<div class="col-sm-3 userLabel">
						<label for="password2">Confirmez le mot de pass :</label>
					</div>
					<div class="col-sm-5">
						<input type="password" name="password2" id="password2" class="inputtext input_middle">
					</div>
					<div class="col-sm-4 errorField"></div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-8 col-sm-offset-4">
					 <div class="input_styled checklist"><div class="rowCheckbox checkbox-large"><div class="custom-checkbox"><input style="outline: medium none;" hidefocus="true" name="usingRole" id="usingRole" value="usingRole" type="checkbox"><label class="" for="usingRole">Identifié par package</label></div></div></div>
				</div>
			</div>
			
			<div id="usingInfos" style="display: none">
				<div class="row">
					<div class="col-sm-3 userLabel">
						<label for="schema">Schéma :</label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="schema" id="schema" class="inputtext input_middle">
					</div>
					<div class="col-sm-4 errorField"></div>
				</div>
				<div class="row">
					<div class="col-sm-3 userLabel">
						<label for="package">Package :</label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="package" id="package" class="inputtext input_middle">
					</div>
					<div class="col-sm-4 errorField"></div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-8 col-sm-offset-4">
					 <div class="input_styled checklist"><div class="rowCheckbox checkbox-large"><div class="custom-checkbox"><input style="outline: medium none;" hidefocus="true" name="externallyRole" id="externallyRole" value="externallyRole" type="checkbox"><label class="" for="externallyRole">Identifié externally</label></div></div></div>
				</div>
			</div>			

			<div class="row">
				<div class="col-sm-8 col-sm-offset-4">
					 <div class="input_styled checklist"><div class="rowCheckbox checkbox-large"><div class="custom-checkbox"><input style="outline: medium none;" hidefocus="true" name="globallyRole" id="globallyRole" value="globallyRole" type="checkbox"><label class="" for="globallyRole">Identifié globally</label></div></div></div>
				</div>
			</div>

			<div class="row">
				<span class="btn btn-red link-submit" style="float: right"><input style="outline: medium none;" hidefocus="true" id="sendButton" value="Créer" type="submit"></span>
			</div>
		</form>

		<h4>Liste des rôles: </h4>
		<table class="table table-condensed table-hover" id="roleListTable"><thead>
			<?php
				$attributs = get_object_vars($roles[0]);

				foreach($attributs as $k=>$v){
					echo '<th>'.$k.'</th>';
				}

				echo '<th>Action</th></thead><tbody>';

				foreach ($roles as $role) {
					echo '<tr>';
					foreach ($attributs as $k => $attr) {
						echo '<td>'.$role->$k.'</td>';
					}
					echo '<td>
					<a class="userFillFields" href="'.ROOT_URL.'/Role/fillFields" value="'.$role->ROLE.'">
						<img src="'.HTDOCS_URL.'/images/icons/edit.png" alt="Modifier">
					</a>
					<a href="'.ROOT_URL.'/Role/delete/'.$role->ROLE.'" onClick="return confirm(\'Sure?\'); ">
						<img src="'.HTDOCS_URL.'/images/icons/delete.png" alt="Supprimer">
					</a>
					</td>';

					echo '</tr>';
				}

			?>
			</tbody>
		</table>
	</div>
</div>