<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
  
	 http_response_code(200);
  
    // show products data in json format

	 	$string = file_get_contents("item.json");
  $json_a = json_decode($string, true);
    echo json_encode($json_a);

  



  ?>