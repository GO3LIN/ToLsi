<form class="form-signin" action="<?php echo ROOT_URL.'/index/login'?>" method="post" id="login_form">
  <h2 class="form-signin-heading">Connexion</h2>
  <input type="text" name="host" class="input-block-level login_avancee" placeholder="Host" value="127.0.0.1">
  <input type="text" name="user" class="input-block-level" placeholder="User" value="">
  <input type="password" name="password" class="input-block-level" placeholder="Password" value="">
  <input type="text" name="sid" class="input-block-level login_avancee" placeholder="SID" value="xe">
  <input type="text" name="port" class="input-block-level login_avancee" placeholder="Port" value="1521">
  <div class="input_styled checklist">
    <div class="rowCheckbox">
      <input name="signup" type="checkbox" checked id="signup" value="signup">
      <label for="signup">Enregistrer?</label>
    </div>
  </div>
  <button class="btn btn-red" type="submit"><span>Connecter</span></button>
  <button class="btn btn-blue" id="login_avancee_btn"><span>Avancé >></span></button>
</form>
