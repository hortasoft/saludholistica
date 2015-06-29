<?php
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
	//Fetching Values from URL
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);

	$name=$request->name;
	$section = $request->section;
	
	$status = 0;
	//Insert query
	$query = mysql_query("UPDATE waiting_general SET status='$status' WHERE name = '$name' AND section = '$section'");
	mysql_close($connection); // Connection Closed

	echo $query;
?>