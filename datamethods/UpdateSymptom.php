<?php
	date_default_timezone_set('America/Bogota');
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
	//Fetching Values from URL
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	
	
	$hoy = date("Y-m-d H:i:s");
	$index = $request->index;
	$symptom1 = $request->symptom1;
	$symptom2 = $request->symptom2;
	$symptom3 = $request->symptom3;
	$symptom4 = $request->symptom4;
	$symptom5 = $request->symptom5;
	$symptom6 = $request->symptom6;	
	$symptom7 = $request->symptom7;
	
	$response = mysql_query("UPDATE symptons_table
			SET
			symptom1 = '$symptom1',
			symptom2 = '$symptom2',	
			symptom3 = '$symptom3',	
			symptom4 = '$symptom4',	
			symptom5 = '$symptom5',	
			symptom6 = '$symptom6',
			symptom7 = '$symptom7'
			WHERE id = $index");
	
	mysql_close($connection); // Connection Closed
	
	echo $response;
?>