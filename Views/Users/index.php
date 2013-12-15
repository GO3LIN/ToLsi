<h4>Ajouter un utilisateur</h4><br>
<div class="row">
	<div class="col-sm-8">
		<form method="post" action="<?php echo ROOT_URL.'/user/add';?>">
			<fieldset><legend>Information de connexion</legend>
			<div class="row">
				<div class="col-sm-4 userLabel">
					<label for="username">Nom d'utilisateur:</label>
				</div>
				<div class="col-sm-8">
					<input type="text" name="username" id="username" class="inputtext input_middle required">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 userLabel">
					<label for="password">Mot de pass:</label>
				</div>
				<div class="col-sm-8">
					<input type="text" name="password" id="password" class="inputtext input_middle required">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 userLabel">
					<label for="password2">Retapez le mot de pass:</label>
				</div>
				<div class="col-sm-8">
					<input type="text" name="password2" id="password2" class="inputtext input_middle required">
				</div>
			</div>
		</fieldset><hr>
		<fieldset>
			<caption>Tablespaces</caption>
			<div class="row">
				<div class="col-sm-4 userLabel">
					<label for="defaultTablespace">Tablespace par défault:</label>
				</div>
				<div class="col-sm-8">
					<input type="text" name="defaultTablespace" id="defaultTablespace" class="inputtext input_middle required">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 userLabel">
					<label for="tempTablespace">Tablespace temporaire:</label>
				</div>
				<div class="col-sm-8">
					<input type="text" name="tempTablespace" id="tempTablespace" class="inputtext input_middle required">
				</div>
			</div>
		</fieldset><hr>
		<fieldset id="quotas">
			<caption>Quotas</caption>
			<div class="row">
				<div class="col-sm-3 userLabel">
					<label for="quota0">Quota (en Mo):</label>
				</div>
				<div class="col-sm-2">
					<input type="text" name="quota0" id="quota0" class="inputtext input_middle required">
				</div>
				<div class="col-sm-3 userLabel">
					<label for="onTablespace0">Sur le tablespace:</label>
				</div>
				<div class="col-sm-4">
					<input type="text" name="onTablespace0" id="onTablespace0" class="inputtext input_middle required">
				</div>
			</div>
			<div class="row" id="bouttonRow">
				<div class="col-sm-3 col-sm-offset-8">
					<a style="outline: medium none;" id="ajouterQuota" hidefocus="true" href="#" class="btn"><span>Ajouter un quota</span></a>
				</div>
			</div>
		</fieldset><hr>
		<fieldset>
			<caption>Autres</caption>
			<div class="row">
			</div>
			<div class="row">
				<div class="col-sm-4 userLabel">
					<label for="profile">Profil :</label>
				</div>
				<div class="col-sm-8">
					<input type="text" name="profile" id="profile" class="inputtext input_middle required">
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
			<span class="btn btn-red link-submit" style="float: right"><input style="outline: medium none;" hidefocus="true" id="send" value="Ajouter" type="submit"></span>
		</div>
		</form>
	</div>
</div>

<hr>

<div class="row">
	<div class="col-sm-12">
		<h4>Liste des utilisateurs</h4>
	</div>
</div>
 <!-- comment form -->

 <!--
                        <div class="add-comment styled ">
                            <div class="add-comment-title"><h3></h3></div>
                            <div class="comment-form halfForLabel">
                                
                                <form action="#" method="post" id="commentForm" >
                                    <div class="form-inner">
                                        <div class="field_text">
                                            <label for="username" class="label_title">Nom d'utilisateur :</label>
                                            <input style="outline: medium none;" hidefocus="true" name="username" id="username" value="" class="inputtext input_middle required" type="text">
                                        </div>
                                        <div class="clear"></div>
                                        <div class="field_text">
                                            <label for="password" class="label_title">Mot de pass :</label>
                                            <input style="outline: medium none;" hidefocus="true" name="password" id="password" value=""  class="inputtext input_middle required" type="password">
                                        </div>
                                        <div class="clear"></div>
                                        <div class="field_text">
                                            <label for="password2" class="label_title">Retapez le mot de pass :</label>
                                            <input style="outline: medium none;" hidefocus="true" name="password2" id="password2" value=""  class="inputtext input_middle required" type="password">
                                        </div>
                                        <div class="clear"></div>
                                        <div class="field_text">
                                            <label for="defaultTablespace" class="label_title">Tablespace par défault :</label>
                                            <input style="outline: medium none;" hidefocus="true" name="defaultTablespace" id="defaultTablespace" value="" class="inputtext input_middle required" type="text">
                                        </div>
                                        <div class="clear"></div>
                                        <div class="field_text">
                                            <label for="tempTablespace" class="label_title">Tablespace temporaire :</label>
                                            <input style="outline: medium none;" hidefocus="true" name="tempTablespace" id="tempTablespace" value="" class="inputtext input_middle required" type="text">
                                        </div>
                                        <div class="clear"></div>
                                        <div class="field_text">
                                            <label for="quota0" class="label_title">Quota (Mo) :</label>
                                            <input style="outline: medium none;" hidefocus="true" name="quota0" id="quota0" value="" class="inputtext input_middle required" type="text">
                                        </div>
                                        <div class="clear"></div>
                                        <div class="field_text">
                                            <label for="onTablespace0" class="label_title">Sur le tablespace :</label>
                                            <input style="outline: medium none;" hidefocus="true" name="onTablespace0" id="onTablespace0" value="" class="inputtext input_middle required" type="text">
                                        </div>
                                        <div class="clear"></div>
                                        <div class="field_text">
                                            <label for="profil" class="label_title">Profile :</label>
                                            <input style="outline: medium none;" hidefocus="true" name="profil" id="profil" value="" class="inputtext input_middle required" type="text">
                                        </div>
                                        <div class="clear"></div>
                                        <div class="field_text">
                                            <label for="expiredPassword" class="label_title">Mot de pass Expiré ?</label>
                                            <input style="outline: medium none;" hidefocus="true" name="expiredPassword" id="expiredPassword" value="" class="inputtext input_middle required" type="text">
                                        </div>
                                        <div class="clear"></div>
                                        <div class="field_text">
                                            <label for="accountLocked" class="label_title">Bloquer le compte :</label>
                                            <input style="outline: medium none;" hidefocus="true" name="accountLocked" id="accountLocked" value="" class="inputtext input_middle required" type="text">
                                        </div>
                                        <div class="clear"></div>
                                    </div>

                                    <div class="rowSubmit">
                                        <a style="outline: medium none;" hidefocus="true" onclick="document.getElementById('commentForm').reset();return false" href="#" class="link-reset btn"><span>Discard</span></a>
                                        <span style="opacity: 1;" class="btn btn-red"><input style="outline: medium none;" hidefocus="true" id="send" value="Send Message" type="submit"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/ comment form -->