<?php
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
	//Fetching Values from URL
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);

	
	$section = $request->section;
	
	$query = mysql_query("SELECT name as nombre, phone as telefono, text as description, priority as priority, status as status 
							FROM waiting_general
							WHERE status = 1
							AND section = '$section'
							ORDER BY priority", $connection);
	$waitings = array();
	while ($row = mysql_fetch_row($query)){ 
		$aux = array('name' => $row[0],
					  'phone' => $row[1],
					  'description' => $row[2],
					  'priority' => $row[3],
					  'status' => $row[4] );
		array_push($waitings, $aux);
	} 
	$json = json_encode($waitings);
    echo $json; 
	mysql_close($connection); // Connection Closed
?>