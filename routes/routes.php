<?php 
$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);
// print_r($routesArray);
// return;
if (count($routesArray)== 0) {
	$json = array('status' => 404 ,
				  'result' => 'No found'
				);
	echo json_encode($json, http_response_code($json["status"]));
	return;
}
if (count($routesArray) ==1 && isset($_SERVER['REQUEST_METHOD'])) {
	// echo '<pre>'; print_r($_SERVER['REQUEST_METHOD']); echo '</pre>';
	if ($_SERVER['REQUEST_METHOD'] == "GET") {
		include "services/get.php";
	}
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$json = array('status' => 202 ,
				  'result' => 'Solicitud POST'
				);
	echo json_encode($json, http_response_code($json["status"]));
	return;
	}
	if ($_SERVER['REQUEST_METHOD'] == "PUT") {
		$json = array('status' => 202 ,
				  'result' => 'Solicitud PUT'
				);
	echo json_encode($json, http_response_code($json["status"]));
	return;
	}
	if ($_SERVER['REQUEST_METHOD'] == "DELETE") {
		$json = array('status' => 202 ,
				  'result' => 'Solicitud DELETE'
				);
	echo json_encode($json, http_response_code($json["status"]));
	return;
	}

}
