<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Informacion Paciente - Salud Holistica</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/user.css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body ng-app="SHapp">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Salud Holistica</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown"><a href="#" class="dropdown-toggle"
						data-toggle="dropdown" role="button" aria-expanded="false">Agenda<span
							class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="index.php">General</a></li>
							<li><a href="agendaodonto.php">Odontologia</a></li>
							<!--  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li class="divider"></li>
                  <li><a href="#">One more separated link</a></li> -->
						</ul></li>
					<li class="active"><a href="user.php">Historia Clinica</a></li>
					

				</ul>

			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<div class="container" ng-controller="userCtrl" ng-init="init()">
		<div class="col-sm-8 col-lg-10">
			<div class="panel panel-primary" id="personal">
				<div class="panel-heading">DATOS PERSONALES</div>
				<div class="panel-body">
					<div class="container-fluid">
						<div class="alert alert-danger alert-dismissible fade in" role="alert" id="UserNotFoundAlert">
					      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					      <strong>Paciente no registrado!</strong> Por favor ingrese todos los datos del paciente y haga click en guardar
					    </div>
					    <div class="alert alert-success alert-dismissible fade in" role="alert" id="UserRegisteredAlert">
					      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					      <strong>Paciente registrado exitosamente!</strong>
					    </div>
					    <div class="alert alert-success alert-dismissible fade in" role="alert" id="UserFoundAlert">
					      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					      <strong>Paciente encontrado!</strong>
					    </div>
					    <div class="alert alert-success alert-dismissible fade in" role="alert" id="UserUpdatedAlert">
					      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					      <strong>Los datos del paciente se actualizaron exitosamente!</strong>
					    </div>
					    <div class="alert alert-warning alert-dismissible fade in" role="alert" id="IncompleteAlert">
					      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					      <strong>Por favor rellenar todos los campos iluminados en rojo!</strong>
					    </div>
						<div class="row fieldrow">
							<div class="col-sm-6">
								<div class="col-sm-4 form-group" id="docinput">
									<label for="pac-name" class="control-label">Documento</label> <input
										type="text" class="form-control" placeholder="" name="name"
										id="pac-doc" ng-model="Iddocument" required>
								</div>
								<div class="col-sm-8 form-group" id="doctypeinput">
									<div class="btn-group" style="margin-top: 24px">
										<button type="button" class="btn btn-default" id="DocTypeBtn" required>Tipo</button>
										<button type="button" class="btn btn-default dropdown-toggle"
											data-toggle="dropdown" aria-expanded="false" id="DocTypeDD" required>
											<span class="caret"></span> <span class="sr-only">Toggle
												Dropdown</span>
										</button>
										<ul class="dropdown-menu DocType" id="DocTypeMenu" role="menu">
											<li><a ng-click="Idtype = 1">Cedula de ciudadania</a></li>
											<li><a ng-click="Idtype = 2">Tarjeta de indentidad</a></li>
											<li><a ng-click="Idtype = 3">Cedula de extranjeria</a></li>
										</ul>
									</div>
									<button type="button" class="btn btn-default" id="SearchDoc"
										ng-click="SearchPatient()">
										<span class="glyphicon glyphicon-search"></span>
									</button>
								</div>



							</div>
							<div class="col-sm-6 form-group" id="nameinput">
								<label for="pac-name" class="control-label">Nombre</label> <input
									type="text" class="form-control" placeholder="" name="name"
									id="pac-name" ng-model="name" required>
							</div>
						</div>
						<div class="row fieldrow">
							<div class="col-sm-6 form-group" id="borndateinput">
								<label class="control-label col-sm-9">Fecha de nacimiento</label>
								<label class="control-label col-sm-3">Edad</label>
								<div class="col-sm-3">
									<input type="text" class="form-control " placeholder="dia"
										name="name" id="hc-bornday" ng-model="bornday" required>
								</div>
								<div class="col-sm-3">
									<input type="text" class="form-control " placeholder="mes"
										name="name" id="hc-bornmonth" ng-model="bornmonth" required>
								</div>
								<div class="col-sm-3">
									<input type="text" class="form-control " placeholder="año"
										name="name" id="hc-bornyear" ng-model="bornyear" required>
								</div>
								<div class="col-sm-3">
									<input type="text" class="form-control " placeholder=""
										name="name" id="hc-age" ng-model="age">
								</div>

							</div>
							<div class="col-sm-6 form-group" id="bornplaceinput">
								<label for="pac-name" class="control-label">Lugar de nacimiento</label>
								<input type="text" class="form-control" placeholder=""
									name="name" id="hc-bornplace" ng-model="bornplace" required>
							</div>
						</div>
						<div class="row fieldrow">
							<div class="col-sm-6">
								<div class="col-sm-6">
									<label for="pac-civil" class="control-label">Estado civil</label>
									<input type="text" class="form-control" placeholder=""
										name="name" id="pac-civil" ng-model="civilstate" required>
								</div>
								<div class="col-sm-6">
									<div class="btn-group" style="margin-top: 24px">
										<button type="button" class="btn btn-default" id="GenreBtn">Sexo</button>
										<button type="button" class="btn btn-default dropdown-toggle"
											data-toggle="dropdown" aria-expanded="false" id="GenreDD" required>
											<span class="caret"></span> <span class="sr-only">Toggle
												Dropdown</span>
										</button>
										<ul class="dropdown-menu Genre" role="menu">
											<li><a ng-click="gender = 0">Masculino</a></li>
											<li><a ng-click="gender = 1">Femenino</a></li>

										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<label for="pac-name" class="control-label">Ocupacion</label> <input
									type="text" class="form-control" placeholder="" name="name"
									ng-model="ocupation">
							</div>
						</div>
						<div class="row fieldrow">
							<div class="col-sm-6">
								<label for="pac-name" class="control-label">Procedencia</label>
								<input type="text" class="form-control" placeholder=""
									name="name" ng-model="procedencia">
							</div>
							<div class="col-sm-6">
								<label for="pac-name" class="control-label">Domicilio</label> <input
									type="text" class="form-control" placeholder="" name="name"
									ng-model="address">
							</div>
						</div>
						<div class="row fieldrow">
							<div class="col-sm-6">
								<label for="pac-name" class="control-label">Telefono</label> <input
									type="text" class="form-control" placeholder="" name="name"
									ng-model="phone">
							</div>
							<div class="col-sm-6">
								<label for="pac-name" class="control-label">Celular</label> <input
									type="text" class="form-control" placeholder="" name="name"
									ng-model="cellphone">
							</div>
						</div>
						<div class="row fieldrow">
							<div class="col-sm-6">
								<label for="pac-name" class="control-label">Acudiente</label> <input
									type="text" class="form-control" placeholder="" name="name"
									ng-model="company">
							</div>
							<div class="col-sm-6">
								<label for="pac-name" class="control-label">Telefono acudiente</label>
								<input type="text" class="form-control" placeholder=""
									name="name" ng-model="companyphone">
							</div>
						</div>
						<div class="row fieldrow">
							<div class="col-sm-6">
								<label for="pac-name" class="control-label">EPS</label> <input
									type="text" class="form-control" placeholder="" name="name"
									ng-model="eps">
							</div>
							<div class="col-sm-6">
								<label for="pac-name" class="control-label">Religion</label> <input
									type="text" class="form-control" placeholder="" name="name"
									 ng-model="religion">
							</div>
						</div>
						<div class="row fieldrow">
							<div class="col-sm-6">
								<label for="pac-name" class="control-label">Referenciado por</label>
								<input type="text" class="form-control" placeholder=""
									name="name" ng-model="reference">
							</div>
							<div class="col-sm-6" id="regdates">
								<p><strong>Fecha de registro:</strong>{{regdate | date:'d/M/yy h:mm a' }}</p>
								<p><strong>Ultima actualizacion:</strong>{{update | date:'d/M/yy h:mm a'}}</p>
							</div>
							
						</div>
						<div class="row">
							<div class="col-sm-12" id="Savebtn">
								<button type="button" class="btn btn-primary"
									style="margin-top: 24px;" 
									ng-click="saveData()">Guardar</button>
							</div>
							<div class="col-sm-12" id="Updatebtn">
								<button type="button" class="btn btn-primary"
									style="margin-top: 24px;" 
									ng-click="UpdateData()">Actualizar</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-primary" id="hisclinic">
				<div class="panel-heading">HISTORIA CLINICA</div>
					<table class="table">
						<tr>
					    	<th>REGISTRO</th>
					    	<th>DESCRIPCION</th>
					    	<th>TIPO</th>
					    	<th>ACCION</th>
				    	</tr>
				    	<tr>
				    		<td>GE1001</td>
				    		<td>Dolor de cabeza</td>
				    		<td>Odontologia</td>
				    		<td>djsk</td>
				    	</tr>
					</table>
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-3 col-sm-offset-2">
								<button type="button" class="btn btn-primary"
									style="margin-top: 24px;" 
									ng-click="AddHC()">Agregar Caso</button>
							</div>
							<div class="col-sm-3 col-sm-offset-3" >
								<button type="button" class="btn btn-success"
									style="margin-top: 24px;" 
									ng-click="UpdateData()">Imprimir</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/messages_es.min.js"></script>
	<script src="js/angular.min.js"></script>
	<script src="js/general.js"></script>
	<script src="js/app/UserCtrl.js"></script>
	<script src="js/user.js"></script>
	<script>
		$("#commentForm").validate();
	</script>
</body>
</html>