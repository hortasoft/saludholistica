<?php
	date_default_timezone_set('America/Bogota');
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
	//Fetching Values from URL
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	
	
	$hoy = date("Y-m-d H:i:s");
	$index = $request->index;
	$sys1 = $request->sys1;
	$sys2 = $request->sys2;
	$sys3 = $request->sys3;
	$sys4 = $request->sys4;
	$sys5 = $request->sys5;
	$sys6 = $request->sys6;
	$sys7 = $request->sys7;
	$sys8 = $request->sys8;
	$sys9 = $request->sys9;
	$sys10 = $request->sys10;
	$sys11 = $request->sys11;
	$sys12 = $request->sys12;
	
	$response = mysql_query("UPDATE systems_table
			SET
			sys1 = '$sys1',
			sys2 = '$sys2',
			sys3 = '$sys3',
			sys4 = '$sys4',
			sys5 = '$sys5',
			sys6 = '$sys6',
			sys7 = '$sys7',
			sys8 = '$sys8',
			sys9 = '$sys9',
			sys10 = '$sys10',
			sys11 = '$sys11',
			sys12 = '$sys12'
			WHERE id = $index");
	
	mysql_close($connection); // Connection Closed
	
	echo $response;
?>