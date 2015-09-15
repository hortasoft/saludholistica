<?php
	date_default_timezone_set('America/Bogota');
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
	//Fetching Values from URL
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);
	
	$HCId=$request->HCId;
	
	$query = mysql_query("SELECT * FROM medicamentos WHERE HCId = '$HCId' ", $connection);
	
	$myarray = array();
	while($row = mysql_fetch_assoc($query)){
		$medicamento=$row['medicamento'];
		$date  = $row['date'];
		$medstatus = $row['medstatus'];		
		$status = $row['status'];
		if($medstatus==0){
			$wordstatus = "Suspendido";
		}else{
			$wordstatus = "Activo";
		}
		$myarray[]=array('med'=>$medicamento, 'date' =>$date, 'medstatus' => $medstatus , "wordstatus" => $wordstatus , 'status' => $status);
	}
	
	mysql_close($connection); // Connection Closed
	
	echo json_encode($myarray);
?>