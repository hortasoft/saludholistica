<?php
date_default_timezone_set('America/Bogota');
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
//Fetching Values from URL
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);


$hoy = date("Y-m-d H:i:s");
$HCId = $request->HDId;
$code = $request->code;
$status = 0;


$response = mysql_query("INSERT INTO hccie
		(HCId,
		code,
		date,
		status)
		VALUES
		('$HCId',
		'$code',
		'$hoy',
		'$status')"
);

$query = mysql_query("SELECT * FROM hccie WHERE code = $code AND HCId = $HCId", $connection);

$myarray = array();
while($row = mysql_fetch_assoc($query)){
	$codigo=$row['code'];
	$myarray[]=array('code'=>$codigo);
}

mysql_close($connection); // Connection Closed

echo json_encode($myarray);
?>