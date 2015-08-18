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
		    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Motivo de consulta</a></li>
		    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
		    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
		    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
		</ul>
		
		 <div class="tab-content">
		    <div role="tabpanel" class="tab-pane active" id="home">
			    <div class="container">
					<div class="row fieldrow">
						<div class="col-sm-11 form-group" id="Motivetext">
							<label for="pac-name" class="control-label">Motivo de la consulta</label> 
							<textarea class="form-control" rows="5" id="Motive" ng_model="motive" ng_change="UpdateMotive()"></textarea>
						</div>
					</div>
				</div>
			</div>
		    <div role="tabpanel" class="tab-pane" id="profile">dhsgc shvchgdv chsgvdhcvhsdgcsd</div>
		    <div role="tabpanel" class="tab-pane" id="messages">siducbh sbdcjhsbdcsdghcvsgvdchsd</div>
		    <div role="tabpanel" class="tab-pane" id="settings">iwuedhiwuh cisdcs dcs</div>
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