<?php
$connection = mysql_connect ( "localhost", "root", "" ); // Establishing Connection with Server..
$db = mysql_select_db ( "saludholisticadb", $connection ); // Selecting Database
// Fetching Values from URL
$postdata = file_get_contents ( "php://input" );
$request = json_decode ( $postdata );

if (!empty($request->code)) {
$code = "%".$request->code."%";
}else{
	$code="%%";
}
if (!empty($request->ciename)) {
	$nametxt = "%".$request->ciename."%";
}else{
	$nametxt = "%%";
}


if($code != "%%" && $nametxt != "%%"){
	$query = mysql_query("SELECT * FROM cie10 WHERE codigo LIKE '$code' OR descripcion LIKE '$nametxt' ", $connection);
}

if($code == "%%" && $nametxt != "%%"){
	$query = mysql_query("SELECT * FROM cie10 WHERE descripcion LIKE '$nametxt' ", $connection);
}elseif ($nametxt =="%%" && $code != "%%"){
$query = mysql_query("SELECT * FROM cie10 WHERE codigo LIKE '$code' ", $connection);
}

$myarray = array();
while($row = mysql_fetch_assoc($query)){
	$codigo=$row['codigo'];
	$nombre  = $row['descripcion'];
	$sexo = $row['sexo'];
	$min = $row['min'];
	$max = $row['max'];
	$nomain = $row['no_main'];
	$obs = $row['obs'];
	$myarray[]=array('code'=>$codigo, 'name' =>$nombre, 'sex' => $sexo, 'min' => $min, "max" => $max, "nomain" => $nomain, 'obs'=>$obs);
}


mysql_close($connection); // Connection Closed
echo json_encode($myarray);
?>