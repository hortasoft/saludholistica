<?php
date_default_timezone_set('America/Bogota');
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
//Fetching Values from URL
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);


$hoy = date("Y-m-d H:i:s");
$index = $request->index;
$diag1 = $request->diag1;
$diag2 = $request->diag2;
$diag3 = $request->diag3;
$diag4 = $request->diag4;

$response = mysql_query("UPDATE diag_table
		SET
		diag1 = '$diag1',
		diag2 = '$diag2',
		diag3 = '$diag3',
		diag4 = '$diag4'
		WHERE id = $index");

mysql_close($connection); // Connection Closed

echo $response;
?>