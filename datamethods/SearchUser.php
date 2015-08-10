<?php
$connection = mysql_connect ( "localhost", "root", "" ); // Establishing Connection with Server..
$db = mysql_select_db ( "saludholisticadb", $connection ); // Selecting Database
                                                        // Fetching Values from URL
$postdata = file_get_contents ( "php://input" );
$request = json_decode ( $postdata );

$Iddocument = $request->Iddocument;
$Idtype = $request->Idtype;

$query = mysql_query("SELECT * FROM personal_data", $connection);

$row = mysql_fetch_row($query);
$rows = array();
while($r = mysqli_fetch_assoc($query)) {
	$rows[] = $r;
}
mysql_close($connection); // Connection Closed
echo json_encode($rows);
?>