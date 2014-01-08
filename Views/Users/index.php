<h4 id="userTitle">Ajouter un utilisateur</h4><br>
<p>Les champ marqué d'un (*) sont obligatoire :</p>
<div class="errors"></div>
<div class="row">
	<div class="col-sm-12">
		<form method="post" action="<?php echo ROOT_URL.'/user/add';?>" id="userForm">
			<fieldset><legend>Information de connexion</legend>
			<div class="row">
				<div class="col-sm-3 userLabel">
					<label for="username">(*) Nom d'utilisateur:</label>
				</div>
				<div class="col-sm-5">
					<input type="text" name="username" id="username" class="inputtext input_middle required"
					value ="<?php echo isset($username) ? $username : '';?>">
				</div>
				<div class="col-sm-4 errorField"></div>
			</div>
			<div class="row">
				<div class="col-sm-3 userLabel">
					<label for="password">(*) Mot de pass:</label>
				</div>
				<div class="col-sm-5">
					<input type="password" name="password" id="password" class="inputtext input_middle required">
				</div>
				<div class="col-sm-4 errorField"></div>
			</div>
			<div class="row">
				<div class="col-sm-3 userLabel">
					<label for="password2">(*) Retapez le mot de pass:</label>
				</div>
				<div class="col-sm-5">
					<input type="password" name="password2" id="password2" class="inputtext input_middle required">
				</div>
				<div class="col-sm-4 errorField"></div>
			</div>
		</fieldset><hr>
		<fieldset>
			<legend>Tablespaces</legend>
			<div class="row">
				<div class="col-sm-3 userLabel">
					<label for="defaultTablespace">Tablespace par défault:</label>
				</div>
				<div class="col-sm-5">
					<input type="text" name="defaultTablespace" id="defaultTablespace" class="inputtext input_middle">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3 userLabel">
					<label for="tempTablespace">Tablespace temporaire:</label>
				</div>
				<div class="col-sm-5">
					<input type="text" name="tempTablespace" id="tempTablespace" class="inputtext input_middle">
				</div>
			</div>
		</fieldset><hr>
		<fieldset id="quotas">
			<legend>Quotas</legend>
			<div class="row">
				<div class="col-sm-3 userLabel">
					<label for="quota0">Quota (en Mo):</label>
				</div>
				<div class="col-sm-2">
					<input type="text" name="quota0" id="quota0" class="inputtext input_middle">
				</div>
				<div class="col-sm-3 userLabel">
					<label for="onTablespace0">Sur le tablespace:</label>
				</div>
				<div class="col-sm-4">
					<input type="text" name="onTablespace0" id="onTablespace0" class="inputtext input_middle">
				</div>
			</div>
			<div class="row" id="bouttonRow">
				<div class="col-sm-2 col-sm-offset-9">
					<a style="outline: medium none;" id="ajouterQuota" hidefocus="true" href="#" class="btn"><span>Ajouter un quota</span></a>
				</div>
			</div>
		</fieldset><hr>
		<fieldset>
			<legend>Autres</legend>
			<div class="row">
			</div>
			<div class="row">
				<div class="col-sm-3 userLabel">
					<label for="profile">Profil :</label>
				</div>
				<div class="col-sm-5">
					<input type="text" name="profile" id="profile" class="inputtext input_middle ">
				</div>
			</div>
			<div class="row">
				<!--<div class="col-sm-4 userLabel">
					<label for="expiredPassword">Mot de pass expiré:</label>
				</div>-->
				<div class="col-sm-8 col-sm-offset-4">
					 <div class="input_styled checklist"><div class="rowCheckbox checkbox-large"><div class="custom-checkbox"><input style="outline: medium none;" hidefocus="true" name="expiredPassword" id="expiredPassword" value="expiredPassword" type="checkbox"><label class="" for="expiredPassword">Mot de pass expiré</label></div></div></div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8 col-sm-offset-4">
					 <div class="input_styled checklist"><div class="rowCheckbox checkbox-large"><div class="custom-checkbox"><input style="outline: medium none;" hidefocus="true" name="blockedAccount"  id="blockedAccount" value="blockedAccount" type="checkbox"><label class="" for="blockedAccount">Compte bloqué</label></div></div></div>
				</div>
			</div>
		</fieldset>
		<div class="row">
			<span class="btn btn-red link-submit" style="float: right"><input style="outline: medium none;" hidefocus="true" id="sendButton" value="Ajouter" type="submit"></span>
		</div>
		</form>
	</div>
</div>

<hr>

<div class="row">
	<div class="col-sm-12">
		<h4>Rechercher un utilisateur</h4>
		<div class="widget-container widget_search">
		    <div class="inner">
		        <form id="searchform2" action="#" method="get">
		            <div class="clearfix">
		                <a class="btn" href="#"><span>Go</span></a>
		                <div class="input_wrap">
		                    <span class="input_icon"></span>
		                    <input id="s2" class="inputField" type="text" value="" placeholder="Username" name="s" hidefocus="true"></input>
		                </div>
		            </div>
		        </form>
		    </div>	
		</div>
		<a href="#" class="btn"><span>Liste des utilisateurs</span></a>

	</div>
</div>

<hr>

<div class="row">
	<div class="col-sm-12">
		<h4>Derniers 10 utilisateurs créés :</h4>
		<table class="table table-condensed table-hover" id="userListTable"><thead>
			<?php
				$attributs = get_object_vars($users[0]);

				foreach($attributs as $k=>$v){
					echo '<th>'.$k.'</th>';
				}

				echo '<th>Action</th></thead><tbody>';

				foreach ($users as $user) {
					echo '<tr>';
					foreach ($attributs as $k => $attr) {
						echo '<td>'.$user->$k.'</td>';
					}
					echo '<td>
					<a class="userFillFields" href="'.ROOT_URL.'/User/fillFields" value="'.$user->USERNAME.'">
						<img src="'.HTDOCS_URL.'/images/icons/edit.png" alt="Modifier">
					</a>
					<a href="'.ROOT_URL.'/User/delete/'.$user->USERNAME.'" onClick="return confirm(\'Sure?\'); ">
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

<script src="<?php echo HTDOCS_URL.'/'; ?>js/formCheck.js"></script>