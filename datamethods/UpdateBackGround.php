<?php
	date_default_timezone_set('America/Bogota');
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
	//Fetching Values from URL
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	
	
	$hoy = date("Y-m-d H:i:s");
	$index = $request->index;
	$back1 = $request->back1;
	$back2 = $request->back2;
	$back3 = $request->back3;
	$back4 = $request->back4;
	$back5 = $request->back5;
	$back6 = $request->back6;
	$back7 = $request->back7;
	$back8 = $request->back8;
	$back9 = $request->back9;
	$back10 = $request->back10;
	$back11 = $request->back11;
	$back12 = $request->back12;
	$back13 = $request->back13;
	
	$response = mysql_query("UPDATE backgrounds_table
			SET
			back1 = '$back1',
			back2 = '$back2',
			back3 = '$back3',
			back4 = '$back4',
			back5 = '$back5',
			back6 = '$back6',
			back7 = '$back7',
			back8 = '$back8',
			back9 = '$back9',
			back10 = '$back10',
			back11 = '$back11',
			back12 = '$back12',
			back13 = '$back13'
			WHERE id = $index");
	
	mysql_close($connection); // Connection Closed
	
	echo $response;
?>