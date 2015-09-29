<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Historia Clinica - Salud Holistica</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/HCGeneral.css">

<?php
$document = $_GET["id"];
$type = $_GET["type"];
$hcid = $_GET["HCId"];
?>
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
	<div class="container" ng-controller="HCCtrl" ng-init="init('<?php echo $document?>', '<?php echo $type?>', '<?php echo $hcid?>')">
		<ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active"><a href="#motivetab" aria-controls="home" role="tab" data-toggle="tab">Motivo de consulta</a></li>
		    <li role="presentation"><a href="#systemstab" aria-controls="profile" role="tab" data-toggle="tab">Revision por sistemas</a></li>
		    <li role="presentation"><a href="#symptomstab" aria-controls="messages" role="tab" data-toggle="tab">Sintomas generales</a></li>
		    <li role="presentation"><a href="#backgroundtab" aria-controls="settings" role="tab" data-toggle="tab">Antecedentes</a></li>
		    <li role="presentation"><a href="#physictab" aria-controls="settings" role="tab" data-toggle="tab">Examen fisico</a></li>
		    <li role="presentation"><a href="#analisystab" aria-controls="analisys" role="tab" data-toggle="tab">Analisis de sintomas</a></li>
		    <li role="presentation"><a href="#diagtab" aria-controls="analisys" role="tab" data-toggle="tab">Diagnostico</a></li>
		    <li role="presentation"><a href="#conductab" aria-controls="analisys" role="tab" data-toggle="tab">Conducta</a></li>
		</ul>
		
		 <div class="tab-content">
		    <div role="tabpanel" class="tab-pane active" id="motivetab">
			    <div class="container">
					<div class="row fieldrow">
						<div class="col-sm-11 form-group" id="Motivetext">
							<label for="pac-name" class="control-label">Motivo de la consulta</label> 
							<textarea class="form-control" rows="5" id="Motive" ng_model="motive" ng_change="UpdateMotive()"></textarea>
						</div>
						<div class="col-sm-11 form-group" id="Symptomtext">
							<label for="pac-name" class="control-label">Sintomas</label> 
							<textarea class="form-control" rows="5" id="Motive" ng_model="symptom" ng_change="UpdateMotive()"></textarea>
						</div>
					</div>
				</div>
			</div>
		    <div role="tabpanel" class="tab-pane" id="systemstab">
		    	<div class="container">
		    		<div class="row fieldrow">
						<div class="col-sm-3 form-group" id="headtext">
							<label for="pac-name" class="control-label">Cabeza</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="sys1" ng_change="UpdateSystem()"></textarea>
						</div>
						<div class="col-sm-3 form-group" id="eyestext">
							<label for="pac-name" class="control-label">Ojos</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="sys2" ng_change="UpdateSystem()"></textarea>
						</div>
						<div class="col-sm-3 form-group" id="orltext">
							<label for="pac-name" class="control-label">ORL</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="sys3" ng_change="UpdateSystem()"></textarea>
						</div>						
					</div>
					<div class="row fieldrow">
						<div class="col-sm-3 form-group" id="mouthtext">
							<label for="pac-name" class="control-label">Boca</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="sys4" ng_change="UpdateSystem()"></textarea>
						</div>
						<div class="col-sm-3 form-group" id="necktext">
							<label for="pac-name" class="control-label">Cuello</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="sys5" ng_change="UpdateSystem()"></textarea>
						</div>
						<div class="col-sm-3 form-group" id="cptext">
							<label for="pac-name" class="control-label">C/P</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="sys6" ng_change="UpdateSystem()"></textarea>
						</div>	
					</div>
					<div class="row fieldrow">
						<div class="col-sm-3 form-group" id="digesttext">
							<label for="pac-name" class="control-label">Digestivo</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="sys7" ng_change="UpdateSystem()"></textarea>
						</div>
						<div class="col-sm-3 form-group" id="gutext">
							<label for="pac-name" class="control-label">G/U</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="sys8" ng_change="UpdateSystem()"></textarea>
						</div>
						<div class="col-sm-3 form-group" id="endotext">
							<label for="pac-name" class="control-label">Endocrino</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="sys9" ng_change="UpdateSystem()"></textarea>
						</div>	
					</div>
					<div class="row fieldrow">
						<div class="col-sm-3 form-group" id="neurotext">
							<label for="pac-name" class="control-label">Neurologico</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="sys10" ng_change="UpdateSystem()"></textarea>
						</div>
						<div class="col-sm-3 form-group" id="osteotext">
							<label for="pac-name" class="control-label">Osteoarticular</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="sys11" ng_change="UpdateSystem()"></textarea>
						</div>
						<div class="col-sm-3 form-group" id="muscletext">
							<label for="pac-name" class="control-label">Musculo - esqueletico</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="sys12" ng_change="UpdateSystem()"></textarea>
						</div>	
					</div>
				</div>
		    </div>
		    <div role="tabpanel" class="tab-pane" id="symptomstab">
			    <div class="container">
			    		<div class="row fieldrow">
							<div class="col-sm-3 form-group" id="wishestext">
								<label for="pac-name" class="control-label">Deseos</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="symptom1" ng_change="UpdateSymptom()"></textarea>
							</div>
							<div class="col-sm-3 form-group" id="averstext">
								<label for="pac-name" class="control-label">Aversiones</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="symptom2" ng_change="UpdateSymptom()"></textarea>
							</div>
							<div class="col-sm-3 form-group" id="thirsttext">
								<label for="pac-name" class="control-label">Sed</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="symptom3" ng_change="UpdateSymptom()"></textarea>
							</div>						
						</div>
						<div class="row fieldrow">
							<div class="col-sm-3 form-group" id="heathtext">
								<label for="pac-name" class="control-label">Calor Vital</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="symptom4" ng_change="UpdateSymptom()"></textarea>
							</div>
							<div class="col-sm-3 form-group" id="transptext">
								<label for="pac-name" class="control-label">Transpiracion</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="symptom5" ng_change="UpdateSymptom()"></textarea>
							</div>
							<div class="col-sm-3 form-group" id="dreamstext">
								<label for="pac-name" class="control-label">Sue�o y sue�os</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="symptom6" ng_change="UpdateSymptom()"></textarea>
							</div>	
						</div>
						<div class="row fieldrow">
							<div class="col-sm-6 form-group" id="mental">
								<label for="pac-name" class="control-label">Sintomas mentales</label> 
								<textarea class="form-control" rows="4" id="Motive" ng_model="symptom7" ng_change="UpdateSymptom()"></textarea>
							</div>
						</div>
				</div>
		    </div>
		    <div role="tabpanel" class="tab-pane" id="backgroundtab">
		    	<div class="container">
			    		<div class="row fieldrow">
							<h3>PERSONALES</h3>
							<div class="col-sm-3 form-group" id="medicaltext">
								<label for="pac-name" class="control-label">Medico - quirurjicos</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="back1" ng_change="UpdateBackGround()"></textarea>
							</div>
							<div class="col-sm-3 form-group" id="ginecotext">
								<label for="pac-name" class="control-label">Gineco - obstetricos</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="back2" ng_change="UpdateBackGround()"></textarea>
							</div>			
							<div class="col-sm-3 form-group" id="traumatext">
								<label for="pac-name" class="control-label">Traumaticos</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="back3" ng_change="UpdateBackGround()"></textarea>
							</div>			
						</div>
						<div class="row fieldrow">
							
							<div class="col-sm-3 form-group" id="habitstext">
								<label for="pac-name" class="control-label">Habitos</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="back4" ng_change="UpdateBackGround()"></textarea>
							</div>
							<div class="col-sm-3 form-group" id="venerealtext">
								<label for="pac-name" class="control-label">Venereas</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="back5" ng_change="UpdateBackGround()"></textarea>
							</div>	
							<div class="col-sm-3 form-group" id="pharmatext">
								<label for="pac-name" class="control-label">Farmacologicos</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="back6" ng_change="UpdateBackGround()"></textarea>
							</div>					
						</div>
						<div class="row fieldrow">							
							<div class="col-sm-3 form-group" id="toxictext">
								<label for="pac-name" class="control-label">Toxicoalergicos</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="back7" ng_change="UpdateBackGround()"></textarea>
							</div>
							<div class="col-sm-3 form-group" id="psicotext">
								<label for="pac-name" class="control-label">Psicologicos</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="back8" ng_change="UpdateBackGround()"></textarea>
							</div>						
						</div>
						<div class="row fieldrow">
							<h3>FAMILIARES</h3>
							<div class="col-sm-4 form-group" id="parentstext">
								<label for="pac-name" class="control-label">Padres</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="back9" ng_change="UpdateBackGround()"></textarea>
							</div>
							<div class="col-sm-4 form-group" id="grandstext">
								<label for="pac-name" class="control-label">Abuelos</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="back10" ng_change="UpdateBackGround()"></textarea>
							</div>					
						</div>
						<div class="row fieldrow">
							
							<div class="col-sm-4 form-group" id="unclestext">
								<label for="pac-name" class="control-label">Tios</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="back11" ng_change="UpdateBackGround()"></textarea>
							</div>
							<div class="col-sm-4 form-group" id="brotherstext">
								<label for="pac-name" class="control-label">Hermanos</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="back12" ng_change="UpdateBackGround()"></textarea>
							</div>											
						</div>
						<div class="row fieldrow">
							<div class="col-sm-6 form-group" id="biopattext">
								<label for="pac-name" class="control-label">BIOPATOGRAFIA</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="back13" ng_change="UpdateBackGround()"></textarea>
							</div>										
						</div>
				</div>
		    </div>
		 	
		 	<div role="tabpanel" class="tab-pane" id="physictab">
		 		<div class="container">
			 		<div class="row fieldrow">
						<div class="col-sm-2 form-group" id="tatext">
							<label for="pac-name" class="control-label">TA</label> 
							<input type="text" class="form-control" placeholder="" name=""	id="pac-doc" ng-model="phy1" ng-change="UpdatePhysic()">
						</div>
						<div class="col-sm-2 form-group" id="fctext">
							<label for="pac-name" class="control-label">FC</label> 
							<input type="text" class="form-control" placeholder="" name=""	id="pac-doc" ng-model="phy2" ng-change="UpdatePhysic()">
						</div>
						<div class="col-sm-2 form-group" id="frtext">
							<label for="pac-name" class="control-label">FR</label> 
							<input type="text" class="form-control" placeholder="" name=""	id="pac-doc" ng-model="phy3" ng-change="UpdatePhysic()">
						</div>
						<div class="col-sm-2 form-group" id="ttext">
							<label for="pac-name" class="control-label">T</label> 
							<input type="text" class="form-control" placeholder="" name=""	id="pac-doc" ng-model="phy4" ng-change="UpdatePhysic()">
						</div>
					</div>
					<div class="row fieldrow">
						<div class="col-sm-2 form-group" id="pstext">
							<label for="pac-name" class="control-label">Ps</label> 
							<input type="text" class="form-control" placeholder="" name=""	id="pac-doc" ng-model="phy5" ng-change="UpdatePhysic()">
						</div>
						<div class="col-sm-2 form-group" id="tltext">
							<label for="pac-name" class="control-label">Tl</label> 
							<input type="text" class="form-control" placeholder="" name=""	id="pac-doc" ng-model="phy6" ng-change="UpdatePhysic()">
						</div>
						<div class="col-sm-2 form-group" id="pstext">
							<label for="pac-name" class="control-label">P. abdominal</label> 
							<input type="text" class="form-control" placeholder="" name=""	id="pac-doc" ng-model="phy7" ng-change="UpdatePhysic()">
						</div>
						<div class="col-sm-2 form-group" id="tltext">
							<label for="pac-name" class="control-label">P. cadera</label> 
							<input type="text" class="form-control" placeholder="" name=""	id="pac-doc" ng-model="phy8" ng-change="UpdatePhysic()">
						</div>
					</div>
					<div class="row fieldrow">
						<div class="col-sm-2 form-group" id="imctext">
							<label for="pac-name" class="control-label">IMC</label> 
							<input type="text" class="form-control" placeholder="" name=""	id="pac-doc" ng-model="phy12" ng-change="UpdatePhysic()">
						</div>
						<div class="col-sm-2 form-group" id="icctext">
							<label for="pac-name" class="control-label">ICC</label> 
							<input type="text" class="form-control" placeholder="" name=""	id="pac-doc" ng-model="phy13" ng-change="UpdatePhysic()">
						</div>
					</div>
					<div class="row fieldrow">
							<div class="col-sm-3 form-group" id="generaltext">
								<label for="pac-name" class="control-label">Estado general</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="phy9" ng_change="UpdatePhysic()"></textarea>
							</div>
							<div class="col-sm-3 form-group" id="acttext">
								<label for="pac-name" class="control-label">Actitud del enfermo</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="phy10" ng_change="UpdatePhysic()"></textarea>
							</div>
							<div class="col-sm-3 form-group" id="findtext">
								<label for="pac-name" class="control-label">Hallazgos</label> 
								<textarea class="form-control" rows="2" id="Motive" ng_model="phy11" ng_change="UpdatePhysic()"></textarea>
							</div>						
						</div>
				</div>
		 	</div>
		 
		 
		<div role="tabpanel" class="tab-pane" id="analisystab">
			<div class="container">
				<div class="row fieldrow">
					<div class="col-sm-6 form-group" id="restext">
						<label for="pac-name" class="control-label">Resumen de sintomas caracteristicos</label> 
						<textarea class="form-control" rows="2" id="Motive" ng_model="ana1" ng_change="UpdateAnalisys()"></textarea>
					</div>	
				</div>
				<div class="row fieldrow">
					<div class="col-sm-6 form-group" id="reperttext">
						<label for="pac-name" class="control-label">Sintomas a repertorizar</label> 
						<textarea class="form-control" rows="2" id="Motive" ng_model="ana2" ng_change="UpdateAnalisys()"></textarea>
					</div>	
				</div>
				<div class="row fieldrow">
					<div class="col-sm-6 form-group" id="repertresultext">
						<label for="pac-name" class="control-label">Resultado de la repertorizacion</label> 
						<textarea class="form-control" rows="2" id="Motive" ng_model="ana3" ng_change="UpdateAnalisys()"></textarea>
					</div>	
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="diagtab">
			<div class="container">
					<div class="row fieldrow">
						<div class="col-sm-5 form-group" id="restext">
							<label for="pac-name" class="control-label">Nosologico</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="diag1" ng_change="UpdateDiag()"></textarea>
						</div>	
						<div class="col-sm-5 form-group" id="reperttext">
							<label for="pac-name" class="control-label">Miasmatico</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="diag2" ng_change="UpdateDiag()"></textarea>
						</div>	
					</div>
					<div class="row fieldrow">
						<div class="col-sm-5 form-group" id="reperttext">
							<label for="pac-name" class="control-label">Integral</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="diag3" ng_change="UpdateDiag()"></textarea>
						</div>	
						<div class="col-sm-5 form-group" id="reperttext">
							<label for="pac-name" class="control-label">Medicamentoso</label> 
							<textarea class="form-control" rows="2" id="Motive" ng_model="diag4" ng_change="UpdateDiag()"></textarea>
						</div>	
					</div>
					
						<div class="row fieldrow">
						<h3>CIE 10</h3>
							<div class="col-sm-12">
								<div class="col-sm-1 form-group" id="docinput">
									<label for="pac-name" class="control-label">Codigo</label> <input
										type="text" class="form-control" placeholder="" name="name"
										id="pac-doc" ng-model="ciecode" required>
								</div>
								<div class="col-sm-4 form-group" id="docinput">
									<label for="pac-name" class="control-label">Nombre</label> <input
										type="text" class="form-control" placeholder="" name="name"
										id="pac-doc" ng-model="ciename" required>
								</div>
								<button type="button" class="btn btn-default" id="SearchDoc"
										ng-click="SearchCie()">
										<span class="glyphicon glyphicon-search"></span>
								</button>
							</div>
						</div>
						<div class="row fieldrow">
							<div class="col-sm-6">
								<table class="table">						
								<tr>
									<th></th>
							    	<th>CODIGO</th>
							    	<th>DESCRIPCION</th>
							    	<th>SEXO</th>
							    	<th>MIN</th>
							    	<th>MAX</th>
							    	<th>NOMAIN</th>
							    	<th>OBSERVACIONES</th>
						    	</tr>
						    	<tr ng-repeat="model in Ciedata">
						    		<td><input type="checkbox" ></td>
						    		<td>{{model.code}}</td>
						    		<td>{{model.name}}</td>
						    		<td>{{model.sex}}</td>
						    		<td>{{model.min}}</td>
						    		<td>{{model.max}}</td>
						    		<td>{{model.nomain}}</td>
						    		<td>{{model.obs}}</td>						    		
						    		<td></td>
						    	</tr>				    	
								</table>
							</div>
						</div>
						<div class="col-sm-6">
								<ul>
									<li ng-repeat="model in Ciecodes">
								</ul>			
							
						</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane" id="conductab">
			<div class="row fieldrow">
				<div class="col-sm-6">
					<div class="container">
						<div class="row">
							<div class="col-sm-9 col-sm-offset-1">
								<div class="panel panel-default medpanel">
									  <div class="panel-heading">
									    <h3 class="panel-title">Medicamentos</h3>
									  </div>
									  <div class="panel-body">
										  <div class="row">
										  	<div class="col-sm-10">
												<table class="table">						
												<tr>
											    	<th>MEDICAMENTO</th>
											    	<th>FECHA DE CREACION</th>
											    	<th>ESTADO</th>
											    	<th>ACCIONES</th>
										    	</tr>
										    	<tr ng-repeat="model in medicines">									    		
										    		<td>{{model.med}}</td>
										    		<td>{{model.date}}</td>
										    		<td>{{model.wordstatus}}</td>	
										    		<td>
										    			<button type="button" class="btn btn-warning btn-xs" ng-show="model.medstatus = 1" ng-click="ChangeMedStatus()" >
															Suspender
														</button>
														<button type="button" class="btn btn-primary btn-xs" ng-show="model.medstatus = 0" ng-click="ChangeMedStatus()">
															Activar
														</button>
										    	</tr>				    	
												</table>
											</div>
										  </div>
										  <div class="col-sm-3 col-sm-offset-2">
										  	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#medModal">
												Agregar
											</button>
										  </div>	
										  <div class="col-sm-3 col-sm-offset-2">
										  	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#medModal">
												imprimir
											</button>
										  </div>											
									  </div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
							<div class="col-sm-3 col-sm-offset-2">
								<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
									Agregar
								</button>
							</div>
							<div class="col-sm-3 col-sm-offset-3" >
								<button type="button" class="btn btn-primary" ng-click="Imprimir()">
									Imprimir
								</button>
							</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- medmodal -->
	<div class="modal fade" id="medModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Agregar Medicamento</h4>
	      </div>
	      <div class="modal-body">
		      <div class="row fieldrow">
			  	<div class="col-sm-11 form-group" id="">					
					<textarea class="form-control" rows="2" id="addmedtxt" ng_model="medAdded"></textarea>
				</div>
		      </div>
		  </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" ng-click="AddMed()">Agregar</button>
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
	<script src="js/app/HCCtrl.js"></script>
	<script src="js/user.js"></script>
	<script>
		$("#commentForm").validate();
	</script>
</body>
</html>