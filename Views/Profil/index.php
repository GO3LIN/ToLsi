<div class="row">
	<div class="col-sm-12">
		<h4>Créer un profil :</h4>
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
			<br>
			<fieldset>
				<legend>Paramètres sur les ressources</legend><br>
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
						<label for="sessPerUser">CPU time / session <br><small>(CPU_PER_SESSION)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>x100 secondes</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="sessPerUser">CPU time / requete <br><small>(CPU_PER_CALL)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>x100 secondes</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="sessPerUser">Durée de session <br><small>(CONNECT_TIME)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>En minutes</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="sessPerUser">Durée inactif <br><small>(IDLE_TIME)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>En minutes</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="sessPerUser">Block données en lecture / session<br><small>(LOGICAL_READS_PER_SESSION)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3 errorField"></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="sessPerUser">Block données en lecture / requete <br><small>(LOGICAL_READS_PER_CALL)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3 errorField"></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="sessPerUser">Cout total / session <br><small>(COMPOSITE_LIMIT)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>En Service Unit:<br>Somme des parametres de session</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="sessPerUser">Espace max en mémoire SGA / session<br><small>(PRIVATE_SGA)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>Suffixes: K, M, G, T, P, E <br>Pour Kilobytes, Megabytes, etc..</em></small></div>
				</div>
			</fieldset>
			<br>
			<fieldset>
				<legend>Paramètres sur le mot de pass</legend>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="sessPerUser">Max tentative de connexion<br><small>(FAILED_LOGIN_ATTEMPTS)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3 errorField"></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="sessPerUser">Durée de verrou du compte<br><small>(PASSWORD_LOCK_TIME)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>En jours<br>(Par défault: 1 Jour)</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="sessPerUser">Durée de vie du mot de pass<br><small>(PASSWORD_LIFE_TIME)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>En jours<br>(Par défaut: 180 jours)</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="sessPerUser">Mot de pass expire après<br><small>(PASSWORD_REUSE_TIME)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>Jours<br>(Par défaut: UNLIMITED)</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="sessPerUser">Possibilité de réutiliser le mot de pass apres<br><small>(PASSWORD_REUSE_MAX)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>Changements de mot de pass<br>(Par défaut: UNLIMITED)</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="sessPerUser">Durée avant periode de grace<br><small>(PASSWORD_GRACE_TIME)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3"><small><em>En jours</em></small></div>
				</div>
				<div class="row">
					<div class="col-sm-4 userLabel">
						<label for="sessPerUser">Fonction de vérification du mot de pass<br><small>(PASSWORD_VERIFY_FUNCTION)</small></label>
					</div>
					<div class="col-sm-5">
						<input type="text" name="sessPerUser" id="sessPerUser" class="inputtext input_middle">
					</div>
					<div class="col-sm-3 errorField"></div>
				</div>
			</fieldset>
			<div class="row">
				<span class="btn btn-red link-submit" style="float: right"><input style="outline: medium none;" hidefocus="true" id="sendButton" value="Créer" type="submit"></span>
			</div>
		</form>
	</div>
</div>