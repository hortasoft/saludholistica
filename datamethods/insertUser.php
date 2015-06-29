<?php
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
	//Insert query
	$query = mysql_query("INSERT INTO personal_data
	(document,
	documentType,
	name,
	bornDate,
	bornPlace,
	civilState,
	gender,
	ocupation,
	procedencia,
	address,
	phone,
	cellphone,
	company,
	companyPhone,
	eps,
	religion,
	reference,
	createDate)
	VALUES
	('$Iddocument',
	'$Idtype',
	'$name',
	'$borndate',
	'$bornplace',
	'$civilstate',
	'$gender',
	'$ocupation',
	'$procedencia',
	'$address',
	'$phone',
	'$cellphone',
	'$company',
	'$companyphone',
	'$eps',
	'$religion',
	'$reference',
	'$hoy')
	");
	mysql_close($connection); // Connection Closed

	echo $query;
?>