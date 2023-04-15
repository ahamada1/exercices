<?php

// creation de lAPI 
$endpoints = [ 
	'/login'=> function (){
		if (!isset($_SESSION["connected"])) {
			$_SESSION["connected"] = false;
		}
	}
	require 'home.php';
    require 'dbconnect.php';
	if(isset($_GET["page"])) {
		// on donne la valeur (le nom) de la page à une variable 
		$page = $_GET["page"];
		// on utilise cette variable pour remplacer le nom de la page souhaitée
		require "pages/$page.php";
	} else {
		// si on ne reçoit pas de page, par défault on require login
		$pageDefault = $_SESSION["connected"]? "home" : "login";
		require "pages/$pageDefault.php";
	}
	"/scuffed"=>function(){
		echo "ok";
	},
	"/post" => function(){
		echo "ok";
	},
];

$route = $_SERVER['PATH_INFO'];

if (!isset($endpoints[$route]))
{
	echo json_encode(["err"=>"endpoint_does_not_exits",]);
	exit;
}	

$endpoint = $endpoints[$route];
$endpoint();




