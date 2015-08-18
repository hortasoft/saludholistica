<?php
	date_default_timezone_set('America/Bogota');
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
	//Fetching Values from URL
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	
	$Iddocument=$request->Iddocument;
	$Idtype=$request->Idtype;
	$hoy = date("Y-m-d H:i:s");
	$HCId = "";
	
	$result = mysql_query("SELECT MAX(`index`) FROM hcindex", $connection);
	
		
	if(!$result){
		$HCId = "GE10001";
	}else{
		$row = mysql_fetch_row($result);
		$index= 10001 + $row[0];
		$HCId= "GE".$index;
	}
	
	$response = mysql_query("INSERT INTO hcindex
			(document,
			documentType,
			HCId,
			creationDate)
			VALUES
			('$Iddocument',
			'$Idtype',
			'$HCId',
			'$hoy')"
			);
	
	mysql_close($connection); // Connection Closed
	
	echo $HCId;
	
?>