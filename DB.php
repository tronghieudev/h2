<?php
	
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	$mysqli = new mysqli("localhost", "root", "", "h2");
	$mysqli->set_charset("utf8");

?>