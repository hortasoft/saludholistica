<?php
date_default_timezone_set('America/Bogota');
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
//Fetching Values from URL
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);


$hoy = date("Y-m-d H:i:s");
$index = $request->index;
$ana1 = $request->ana1;
$ana2 = $request->ana2;
$ana3 = $request->ana3;

$response = mysql_query("UPDATE analisys_table
		SET
		ana1 = '$ana1',
		ana2 = '$ana2',
		ana3 = '$ana3'
		WHERE id = $index");

mysql_close($connection); // Connection Closed

echo $response;
?>