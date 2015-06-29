<?php
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
	$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
	//Fetching Values from URL
	$postdata = file_get_contents("php://input");
	$request = json_decode($postdata);

	$name=$request->name;
	$phone=$request->phone;
	$desc=$request->desc;
	$priority=$request->priority;
	$section = $request->section;
	$status = 1;
	//Insert query
	$query = mysql_query("insert into waiting_general(name, phone, text, priority, status, section) values ('$name', '$phone', '$desc','$priority','$status', '$section')");
	mysql_close($connection); // Connection Closed

	echo $query;
?>