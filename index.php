<?php

define("ROOT_DIR", dirname($_SERVER['SCRIPT_FILENAME']));
define("DS", DIRECTORY_SEPARATOR);
define("CORE_DIR", ROOT_DIR.DS.'Core');
define("HTDOCS_DIR", ROOT_DIR.DS.'Htdocs');
define("ROOT_URL", dirname($_SERVER['SCRIPT_NAME']));
define("HTDOCS_URL", ROOT_URL.'/Htdocs');

require_once(CORE_DIR.DS.'Includes.php');

new Dispatcher();

?>