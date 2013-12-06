<!doctype html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="author" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title></title>

<!-- main JS libs -->
<script src="<?php echo HTDOCS_URL.'/'; ?>js/libs/modernizr.min.js"></script>
<script src="<?php echo HTDOCS_URL.'/'; ?>js/libs/jquery-1.10.0.js"></script>
<script src="<?php echo HTDOCS_URL.'/'; ?>js/libs/jquery-ui.min.js"></script>
<script src="<?php echo HTDOCS_URL.'/'; ?>js/libs/bootstrap.min.js"></script>
<script src="<?php echo HTDOCS_URL.'/'; ?>js/jquery.customInput.js"></script>

<!-- Style CSS -->
<link href="<?php echo HTDOCS_URL.'/'; ?>style.less" media="screen" rel="stylesheet/less" type="text/css">

<!-- scripts -->
<script src="<?php echo HTDOCS_URL.'/'; ?>js/general.js"></script>

<!-- Include all needed stylesheets and scripts here -->





<!-- LESS -->
<script src="<?php echo HTDOCS_URL.'/'; ?>js/libs/less.js"></script>

<!--[if lt IE 9]><script src="<?php echo HTDOCS_URL.'/'; ?>js/respond.min.js"></script><![endif]-->
<!--[if gte IE 9]>
<style type="text/css">
    .gradient {filter: none !important;}
</style>
<![endif]-->
<style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
</head>

<body>
<div class="body_wrap">
    <div class="container">

      <form class="form-signin" action="connect.php" method="post">
        <h2 class="form-signin-heading">Connexion</h2>
        <input type="text" name="host" class="input-block-level" placeholder="Host">
        <input type="text" name="user" class="input-block-level" placeholder="User">
        <input type="password" name="password" class="input-block-level" placeholder="Password">
        <input type="text" name="sid" class="input-block-level" placeholder="SID">
        <input type="text" name="port" class="input-block-level" placeholder="Port" value="1521">
        <div class="input_styled checklist">
          <div class="rowCheckbox">
            <input name="signup" type="checkbox" checked id="signup" value="signup">
            <label for="signup">Enregistrer?</label>
          </div>
        </div>
        <button class="btn btn-red" type="submit"><span>Connecter</span></button>
        <button class="btn btn-blue"><span>Avancé >></span></button>
      </form>

    </div> <!-- /container -->
</div>
</body>
</html>