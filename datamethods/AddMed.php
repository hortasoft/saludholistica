<?php
	date_default_timezone_set('America/Bogota');
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
	//Fetching Values from URL
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	
	$HCId=$request->HCId;
	$Med=$request->Med;
	$hoy = date("Y-m-d H:i:s");
	$MedStatus = 1;
	$status = 0;
	
	
	
	$response = mysql_query("INSERT INTO medicamentos
		(HCId,
		medicamento,
		date,
		medstatus,
		status)
		VALUES
		('$HCId',
		'$Med',
		'$hoy',
		'$MedStatus',
		'$status')"
	);
	
	mysql_close($connection); // Connection Closed
	
	echo $HCId;
?>