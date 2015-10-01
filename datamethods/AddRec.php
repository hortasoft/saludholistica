<?php
	date_default_timezone_set('America/Bogota');
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
	//Fetching Values from URL
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	
	$HCId=$request->HCId;
	$Rec=$request->Reco;
	$hoy = date("Y-m-d H:i:s");
	$RecStatus = 1;
	$status = 0;
	
	
	
	$response = mysql_query("INSERT INTO recomendaciones
		(HCId,
		recomendacion,
		date,
		lastUpdate,
		recstatus,
		status)
		VALUES
		('$HCId',
		'$Rec',
		'$hoy',
		'$hoy',
		'$RecStatus',
		'$status')"
	);
	

	$query = mysql_query("SELECT * FROM recomendaciones WHERE HCId = '$HCId'", $connection);
	
	$myarray = array();
	while($row = mysql_fetch_assoc($query)){
		$recId=$row['id'];
		$recomendacion=$row['recomendacion'];
		$date  = $row['date'];
		$lastdate  = $row['lastUpdate'];
		$recstatus = $row['recstatus'];		
		$status = $row['status'];
		if($recstatus==0){
			$wordstatus = "Suspendido";
		}else{
			$wordstatus = "Activo";
		}
		$myarray[]=array('id' => $recId, 'rec'=>$recomendacion, 'date' =>$date, 'lastdate' => $lastdate, 'recstatus' => $recstatus , "wordstatus" => $wordstatus , 'status' => $status);
	}
	

	mysql_close($connection); // Connection Closed
	echo json_encode($myarray);


?>