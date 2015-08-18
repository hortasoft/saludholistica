<?php
date_default_timezone_set('America/Bogota');
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server..
$db = mysql_select_db("saludholisticadb", $connection); // Selecting Database
//Fetching Values from URL
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

$Iddocument=$request->Iddocument;
$Idtype=$request->Idtype;
$name=$request->name;
$borndate=$request->borndate;
$bornplace=$request->bornplace;
$civilstate=$request->civilstate;
$gender=$request->gender;
$ocupation=$request->ocupation;
$procedencia=$request->procedencia;
$address=$request->address;
$phone=$request->phone;
$cellphone=$request->cellphone;
$company=$request->company;
$companyphone=$request->companyphone;
$eps=$request->eps;
$religion=$request->religion;
$reference=$request->reference;
$hoy = date("Y-m-d H:i:s");

$response = mysql_query("UPDATE personal_data
SET
civilState = '$civilstate',
ocupation = '$ocupation',
procedencia = '$procedencia',
address = '$address',
phone = '$phone',
cellphone = '$cellphone',
company = '$company',
companyPhone = '$companyphone',
eps = '$eps',
religion = '$religion',
reference = '$reference',
updateDate = '$hoy'
WHERE document = '$Iddocument' AND documentType = '$Idtype'");

mysql_close($connection); // Connection Closed

echo $response;
?>