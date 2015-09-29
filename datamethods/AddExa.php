<?php
	date_default_timezone_set('America/Bogota');
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
	//Fetching Values from URL
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	
	$HCId=$request->HCId;
	$Exa=$request->Exa;
	$hoy = date("Y-m-d H:i:s");
	$status = 0;
	
	
	
	$response = mysql_query("INSERT INTO examinations
		(HCID,
		name,
		date,
		lastUpdate,
		status)
		VALUES
		('$HCId',
		'$Exa',
		'$hoy',
		'$hoy',
		'$status')"
	);
	
	$query = mysql_query("SELECT * FROM examinations WHERE HCID= '$HCId'", $connection);
	
	$myarray = array();
	while($row = mysql_fetch_assoc($query)){
		$id=$row['id'];
		$exa = $row['name'];
		$res = $row['result'];
		$date = $row['date'];
		$resdate = $row['resultDate'];
		$lastdate = $row['lastUpdate'];
		$status = $row['status'];
		$myarray[]=array('id'=>$id, 'HCId' =>$HCId, 'name' => $exa, 'res' => $res, 'date' => $date, 'resdate' => $resdate, 'lastdate' => $lastdate, "status" => $status);
	}
	
	
	mysql_close($connection); // Connection Closed
	echo json_encode($myarray);
	
	
?>