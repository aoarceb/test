<?php
$SALUDO='hola';
//define("PROJECT_ROOT_PATH", __DIR__ . "\..\");
// include main configuration file 
require_once 'C:/xampp/htdocs/TEST/inc/config.php';
// include the base controller file 
require_once "C:/xampp/htdocs/TEST/Controller/Api/BaseController.php";
// include the use model file 
require_once "C:/xampp/htdocs/TEST/Model/UserModel.php";

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
 
$uri = explode( '/', $uri );


if ((isset($uri[3]) && $uri[3] != 'user') || !isset($uri[4])) {
	    
	header("HTTP/1.1 404 Not Found");
    exit();
}

require "C:/xampp/htdocs/TEST/Controller/Api/UserController.php";

$objFeedController = new UserController();

$strMethodName = $uri[4] . 'Action';
$objFeedController->{$strMethodName}();

?>