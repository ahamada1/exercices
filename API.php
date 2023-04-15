<?php
require('db.php');

$endpoints = [ 
    "userposts" => function() {
        echo json_encode(getUserPosts(0));
    }, 
    "allposts" => function() {
        echo json_encode(getAllPosts());
    }
]; 

$apiR = isset($_GET['api']) ? $_GET['api'] : 'no';

if (!isset($endpoints[$apiR])){ 
    http_response_code(404);
    echo json_encode([ "erreur"=>"endpoint n'exits pas"]);
    exit;
}

$endpoint  = $endpoints[$apiR];
$endpoint();