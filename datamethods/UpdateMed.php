<?php
date_default_timezone_set('America/Bogota');
$connection = mysql_connect ( "localhost", "root", "" ); // Establishing Connection with Server..
$db = mysql_select_db ( "saludholisticadb", $connection ); // Selecting Database
// Fetching Values from URL
$postdata = file_get_contents ( "php://input" );
$request = json_decode ( $postdata );

$HCId = $request->HCId;
$MedId = $request->MedId;
$ToStat = $request->ToStat;
$hoy = date("Y-m-d H:i:s");

$result = mysql_query("UPDATE medicamentos SET
medstatus = '$ToStat',
lastUpdate = '$hoy'
WHERE id = '$MedId'");

$query = mysql_query("SELECT * FROM medicamentos WHERE HCId = '$HCId'", $connection);

$myarray = array();
	while($row = mysql_fetch_assoc($query)){
		$medId=$row['id'];
		$medicamento=$row['medicamento'];
		$date  = $row['date'];
		$lastdate  = $row['lastUpdate'];
		$medstatus = $row['medstatus'];		
		$status = $row['status'];
		if($medstatus==0){
			$wordstatus = "Suspendido";
		}else{
			$wordstatus = "Activo";
		}
		$myarray[]=array('id' => $medId, 'med'=>$medicamento, 'date' =>$date, 'lastdate' => $lastdate, 'medstatus' => $medstatus , "wordstatus" => $wordstatus , 'status' => $status);
	}


mysql_close($connection); // Connection Closed
echo json_encode($myarray);
?>