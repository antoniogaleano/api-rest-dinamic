<?php
ini_set('display_errors',1);
ini_set("log_errors",1);
ini_set("error_log","C:/xampp/htdocs/api-rest-dinamic/php_error_log");
require_once "models/connection.php";

// echo '<pre>'; print_r(Connection::connect()); echo '</pre>';
	require_once "controllers/routes.controller.php";
	$index = new RoutesController();
	$index -> index();
