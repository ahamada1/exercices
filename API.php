<?php

$endpoints = [ 
	"/testeur" =>function(){ 
		echo "ok" ;
	    },
    "/myposts" => function() {
        echo json_encode([ "posts"=>[
            ["content" => "post 1"],
            ["content" => "post 2"],
        ]]);
    }
]; 

$REQUEST_URI= $_SERVER['REQUEST_URI'];     
               
$apiR = substr($REQUEST_URI, strlen($REQUEST_URI)-8, strlen($REQUEST_URI));   

if (!isset($endpoints[$apiR])){
http_response_code(404);
echo json_encode([ "err"=>"endpoint_does_not_exits"]);
exit;
}

$endpoint  = $endpoints[$apiR];
$endpoint();