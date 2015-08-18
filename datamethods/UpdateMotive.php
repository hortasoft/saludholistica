<?php
date_default_timezone_set('America/Bogota');
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
//Fetching Values from URL
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);


$hoy = date("Y-m-d H:i:s");
$Motive = $request->Motive;
$Symptom = $request->Symptom;
$index = $request->index;

$response = mysql_query("UPDATE motive_table
		SET
		motive = '$Motive',
		symptom = '$Symptom'
		WHERE `index`=$index");

mysql_close($connection); // Connection Closed

echo $response;
?>