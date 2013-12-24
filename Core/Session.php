<?php
class Session {


	public function __construct(){
		session_start();
	}

	static function setFlash($message, $type = 'error'){
		$_SESSION['flash'] = array(
			"message" => $message,
			"type"    => $type
			);
	}

	static function flash(){
		if(isset($_SESSION['flash'])){
			?>
			<div id="flashAlert" class="alert boxed alert-<?php echo $_SESSION['flash']['type'];?>">
				<div class="alert-body">
                    <span><?php echo ucfirst($_SESSION['flash']['type']); ?> :</span>
                    <p><?php echo $_SESSION['flash']['message']; ?></p>
                </div>
                <div class="ribbon"><span><i class="post-label"></i><a id="closeButton" class="close">close</a></span></div>
                
			</div>
			<?php
			unset($_SESSION['flash']);
		}
	}

	static function deconnexion(){
		session_destroy();
	}

}
new Session();
?>