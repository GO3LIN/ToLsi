<div class="row">
	<div class="col-sm-12">
		<h4>Creer un profil :</h4>
		<p>Les champs marques d'un (*) sont obligatoires :</p>
		<form method="post" action="profile/add" id="roleForm">
			<div class="row">
				<div class="col-sm-3 userLabel">
					<label for="nom">(*) Nom :</label>
				</div>
				<div class="col-sm-5">
					<input type="text" name="nom" id="nom" class="inputtext input_middle required">
				</div>
				<div class="col-sm-4 errorField"></div>
			</div>
			<br>
			<fieldset>
				<legend>Parametres sur les ressources</legend><br>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="sessPerUser">Session(s) / utilisateur <br><small>(SESSIONS_PER_USER)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3 errorField"></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="cpuPerSession">CPU time / session <br><small>(CPU_PER_SESSION)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="cpuPerSession" id="cpuPerSession" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>x100 secondes</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="cpuPerCall">CPU time / requete <br><small>(CPU_PER_CALL)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="cpuPerCall" id="cpuPerCall" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>x100 secondes</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="connectTime">Duree de session <br><small>(CONNECT_TIME)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="connectTime" id="connectTime" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>En minutes</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="idleTime">Duree inactif <br><small>(IDLE_TIME)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="idleTime" id="idleTime" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>En minutes</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="lReadsPerSession">Block données en lecture / session<br><small>(LOGICAL_READS_PER_SESSION)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="lReadsPerSession" id="lReadsPerSession" class="inputtext input_middle">
					</div>
					<div class="col-sm-3 errorField"></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="lReadsPerCall">Block donnees en lecture / requete <br><small>(LOGICAL_READS_PER_CALL)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="lReadsPerCall" id="lReadsPerCall" class="inputtext input_middle">
					</div>
					<div class="col-sm-3 errorField"></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="compositeLimit">Cout total / session <br><small>(COMPOSITE_LIMIT)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="compositeLimit" id="compositeLimit" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>En Service Unit:<br>Somme des parametres de session</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="privateSga">Espace max en memoire SGA / session<br><small>(PRIVATE_SGA)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="privateSga" id="privateSga" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>Suffixes: K, M, G, T, P, E <br>Pour Kilobytes, Megabytes, etc..</em></small></div>
				</div>
			</fieldset>
			<br>
			<fieldset>
				<legend>Parametres sur le mot de pass</legend>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="failedLogin">Max tentative de connexion<br><small>(FAILED_LOGIN_ATTEMPTS)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="failedLogin" id="failedLogin" class="inputtext input_middle">
					</div>
					<div class="col-sm-3 errorField"></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="pLockTime">Duree de verrou du compte<br><small>(PASSWORD_LOCK_TIME)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="pLockTime" id="pLockTime" class="inputtext input_middle" value="1">
					</div>
					<div class="col-sm-3"><small><em>En jours</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="pLifeTime">Duree de vie du mot de pass<br><small>(PASSWORD_LIFE_TIME)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="pLifeTime" id="pLifeTime" class="inputtext input_middle" value="180">
					</div>
					<div class="col-sm-3"><small><em>En jours</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="pReuseTime">Mot de pass expire après<br><small>(PASSWORD_REUSE_TIME)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="pReuseTime" id="pReuseTime" class="inputtext input_middle" value="UNLIMITED">
					</div>
					<div class="col-sm-3"><small><em>Jours</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="pReuseMax">Possibilité de reutiliser le mot de pass apres<br><small>(PASSWORD_REUSE_MAX)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="pReuseMax" id="pReuseMax" class="inputtext input_middle" value="UNLIMITED">
					</div>
					<div class="col-sm-3"><small><em>Changements de mot de pass</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="pGraceTime">Duree avant periode de grace<br><small>(PASSWORD_GRACE_TIME)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="pGraceTime" id="pGraceTime" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>En jours</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="pVerifyFunc">Fonction de verification du mot de pass<br><small>(PASSWORD_VERIFY_FUNCTION)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="pVerifyFunc" id="pVerifyFunc" class="inputtext input_middle">
					</div>
					<div class="col-sm-3 errorField"></div>
				</div>
			</fieldset>
			<div class="row">
				<span class="btn btn-red link-submit" style="float: right"><input style="outline: medium none;" hidefocus="true" id="sendButton" value="Créer" type="submit"></span>
			</div>
		</form>

		<h4>Liste des profils</h4>
		<table class="table table-condensed table-hover" id="profileListTable"><thead>
			<?php
				$attributs = get_object_vars($profiles[0]);

				foreach($attributs as $k=>$v){
					echo '<th>'.$k.'</th>';
				}

				echo '<th>Action</th></thead><tbody>';

				foreach ($profiles as $profile) {
					echo '<tr>';
					foreach ($attributs as $k => $attr) {
						echo '<td>'.$profile->$k.'</td>';
					}
					echo '<td>
					<a class="fillFields" href="'.ROOT_URL.'/Profile/fillFields" value="'.$profile->PROFILE.'">
						<img src="'.HTDOCS_URL.'/images/icons/edit.png" alt="Modifier">
					</a>
					<a href="'.ROOT_URL.'/Profile/delete/'.$profile->PROFILE.'" onClick="return confirm(\'Sure?\'); ">
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

