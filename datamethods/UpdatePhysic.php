<?php
	date_default_timezone_set('America/Bogota');
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
	//Fetching Values from URL
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	
	
	$hoy = date("Y-m-d H:i:s");
	$index = $request->index;
	$phy1 = $request->phy1;
	$phy2 = $request->phy2;
	$phy3 = $request->phy3;
	$phy4 = $request->phy4;
	$phy5 = $request->phy5;
	$phy6 = $request->phy6;
	$phy7 = $request->phy7;
	$phy8 = $request->phy8;
	$phy9 = $request->phy9;
	$phy10 = $request->phy10;
	$phy11 = $request->phy11;
	$phy12 = $request->phy12;
	$phy13 = $request->phy13;
	
	$response = mysql_query("UPDATE physics_table
			SET
			phy1 = '$phy1',
			phy2 = '$phy2',
			phy3 = '$phy3',
			phy4 = '$phy4',
			phy5 = '$phy5',
			phy6 = '$phy6',
			phy7 = '$phy7',
			phy8 = '$phy8',
			phy9 = '$phy9',
			phy10 = '$phy10',
			phy11 = '$phy11',
			phy12 = '$phy12',
			phy13 = '$phy13'
			WHERE id = $index");
	
	mysql_close($connection); // Connection Closed
	
	echo $response;
?>