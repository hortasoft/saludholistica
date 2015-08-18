<?php
	$connection = mysql_connect ( "localhost", "root", "" ); // Establishing Connection with Server..
	$db = mysql_select_db ( "saludholisticadb", $connection ); // Selecting Database
	// Fetching Values from URL
	$postdata = file_get_contents ( "php://input" );
	$request = json_decode ( $postdata );
	
	$Iddocument = $request->Iddocument;
	$Idtype = $request->Idtype;
	
	$query = mysql_query("SELECT * FROM hcindex WHERE document = $Iddocument AND documentType = $Idtype ", $connection);
	
	$myarray = array();
	while($row = mysql_fetch_assoc($query)){
		$id=$row['HCId'];
		$date = $row['creationDate'];
		$myarray[]=array('id'=>$id, 'date' =>$date);
	}
	
	
	mysql_close($connection); // Connection Closed
	echo json_encode($myarray);
?>