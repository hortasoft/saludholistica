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
		lastUpdate,
		medstatus,
		status)
		VALUES
		('$HCId',
		'$Med',
		'$hoy',
		'$hoy',
		'$MedStatus',
		'$status')"
	);
	

	$query = mysql_query("SELECT * FROM medicamentos WHERE HCId = '$HCId'", $connection);
	
	$myarray = array();
	while($row = mysql_fetch_assoc($query)){
		$id=$row['id'];
		$med = $row['medicamento'];
		$date = $row['date'];
		$lastdate = $row['lastUpdate'];
		if($row['medstatus'] == 1){
			$medstatus = "Activo";
		}else{
			$medstatus = "Suspendido";
		}
		$status = $row['status'];
		$myarray[]=array('id'=>$id, 'HCId' =>$HCId, 'med' => $med, 'date' => $date, 'lastdate' => $lastdate, "medstatus" => $medstatus, "status" => $status);
	}
	

	mysql_close($connection); // Connection Closed
	echo json_encode($myarray);


?>