<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");




	
// array
$array = Array (
    "0" => Array (
        "id" => "MMZ301",
        "name" => "Michael Bruce",
        "designation" => "System Architect"
    ),
    "1" => Array (
        "id" => "MMZ385",
        "name" => "Jennifer Winters",
        "designation" => "Senior Programmer"
    ),
    "2" => Array (
        "id" => "MMZ593",
        "name" => "Donna Fox",
        "designation" => "Office Manager"
    )
);

// encode array to json
$json = json_encode(array('data' => $array));

//write json to file
if (file_put_contents("item.json", $json))
    echo "JSON file created successfully...";
else 
    echo "Oops! Error creating json file...";







http_response_code(201);
  
        // tell the user
        echo json_encode(array("message" => "Product was created."));

?>