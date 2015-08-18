<?php
	date_default_timezone_set('America/Bogota');
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
	//Fetching Values from URL
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	
	
	$hoy = date("Y-m-d H:i:s");
	$HCId = $request->HCId;
	$HCindex= $request->HCindex;
	$systemindex = $request->systemindex;
	$symptomindex = $request->symptomindex;
	$backindex = $request->backindex;
	$physicindex = $request->physicindex;
	$analisysindex = $request->analisysindex;
	$diagindex = $request->diagindex;
	
?>