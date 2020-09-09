<?php

session_start();
require_once "Facebook/autoload.php";

$FB=new \Facebook\Facebook([
		'app_id' =>'564146760825525',
		'app_secret' => '558d9fc3acf7c1befff1036bd132fc79',
		'default_graph_version' =>'v2.10'	
		]);
		
		$helper=$FB ->getRedirectLoginHelper();

?>