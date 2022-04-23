<?php 
$table = $routesArray[1];
$response = new GetController::getData($table);
echo '<pre>'; print_r($table); echo '</pre>';

return;

$json = array('status' => 200 ,
				  'result' => 'Solicitud GET'
				);
	echo json_encode($json, http_response_code($json["status"]));
