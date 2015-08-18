<?php
	date_default_timezone_set('America/Bogota');
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
	//Fetching Values from URL
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	
	
	$hoy = date("Y-m-d H:i:s");
	$HCId = $request->HCId;
	$status = 0;
	
	$result = mysql_query("SELECT * FROM analisys_table WHERE HCId = '$HCId' AND status=$status", $connection);
	
	if(!$result || mysql_num_rows($result)==0){
		$response = mysql_query("INSERT INTO analisys_table
				(HCId,
				date,
				status)
				VALUES
				('$HCId',
				'$hoy',
				'$status')"
		);
	
		$result = mysql_query("SELECT * FROM analisys_table WHERE HCId = '$HCId' AND status=$status", $connection);
	}
	
	$row = mysql_fetch_row($result);
	
	mysql_close($connection); // Connection Closed
	
	echo json_encode($row);
?>