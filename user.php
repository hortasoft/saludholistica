<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Agenda general - Salud Holistica</title>

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
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Salud Holistica</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
               <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Agenda<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="index.php">General</a></li>
                  <li><a href="agendaodonto.php">Odontologia</a></li>
                 <!--  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  <li class="divider"></li>
                  <li><a href="#">One more separated link</a></li> -->
                </ul>
              </li>
              <li class="active"><a href="user.php">Historia Clinica</a></li>
              <li><a href="#">Link</a></li>
             
            </ul>
                   
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div class="container" ng-controller="userCtrl" ng-init="init()">
        <div class="col-sm-8 col-lg-10">
          <div class="panel panel-primary" id="personal">
            <div class="panel-heading">DATOS PERSONALES</div>
            <div class="panel-body">
              <div class="container-fluid">
                <div class="row fieldrow">
                  <div class="col-sm-6">
                    <div class="col-sm-6">
                      <label for="pac-name" class="control-label">Documento</label>
                      <input type="text" class="form-control" placeholder="" name="name" id="pac-name" ng-model="Iddocument">
                    </div>
                    <div class="col-sm-6">
                      <div class="btn-group" style="margin-top:24px">
                        <button type="button" class="btn btn-default">Tipo</button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a ng-click="Idtype = 1">Cedula de ciudadania</a></li>
                          <li><a ng-click="Idtype = 2">Tarjeta de indentidad</a></li>
                          <li><a ng-click="Idtype = 3">Cedula de extranjeria</a></li>                          
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label for="pac-name" class="control-label">Nombre</label>
                    <input type="text" class="form-control" placeholder="" name="name" id="pac-name" ng-model="name">
                  </div>
                </div>
                <div class="row fieldrow">
                  <div class="col-sm-6">
                    <label class="control-label col-sm-9">Fecha de nacimiento</label>
                    <label class="control-label col-sm-3">Edad</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control " placeholder="dia" name="name" id="hc-bornday" ng-model="bornday" >
                      </div>
                      <div class="col-sm-3">
                        <input type="text" class="form-control " placeholder="mes" name="name" id="hc-bornmonth" ng-model="bornmonth" >
                      </div>
                      <div class="col-sm-3">
                        <input type="text" class="form-control " placeholder="año" name="name" id="hc-bornyear" ng-model="bornyear" >
                      </div>
                      <div class="col-sm-3">
                        <input type="text" class="form-control " placeholder="" name="name" id="hc-age" ng-model="age">
                      </div>
                   
                  </div>
                  <div class="col-sm-6">
                    <label for="pac-name" class="control-label">Lugar de nacimiento</label>
                    <input type="text" class="form-control" placeholder="" name="name" id="hc-bornplace" ng-model="bornplace">
                  </div>
                </div>
                <div class="row fieldrow">
                  <div class="col-sm-6">
                    <div class="col-sm-6">
                      <label for="pac-civil" class="control-label">Estado civil</label>
                      <input type="text" class="form-control" placeholder="" name="name" id="pac-civil" ng-model="civilstate">
                    </div>
                    <div class="col-sm-6">
                      <div class="btn-group" style="margin-top:24px">
                        <button type="button" class="btn btn-default">Sexo</button>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                          <span class="caret"></span>
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                          <li><a ng-click="gender = 0">Masculino</a></li>
                          <li><a ng-click="gender = 1">Femenino</a></li>
                                                
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <label for="pac-name" class="control-label">Ocupacion</label>
                    <input type="text" class="form-control" placeholder="" name="name" id="pac-name" ng-model="ocupation">
                  </div>
                </div>
                <div class="row fieldrow">
                  <div class="col-sm-6">
                    <label for="pac-name" class="control-label">Procedencia</label>
                    <input type="text" class="form-control" placeholder="" name="name" id="pac-name" ng-model="procedencia">
                  </div>
                  <div class="col-sm-6">
                    <label for="pac-name" class="control-label">Domicilio</label>
                    <input type="text" class="form-control" placeholder="" name="name" id="pac-name" ng-model="address">
                  </div>
                </div>
                <div class="row fieldrow">
                  <div class="col-sm-6">
                    <label for="pac-name" class="control-label">Telefono</label>
                    <input type="text" class="form-control" placeholder="" name="name" id="pac-name" ng-model="phone">
                  </div>
                  <div class="col-sm-6">
                    <label for="pac-name" class="control-label">Celular</label>
                    <input type="text" class="form-control" placeholder="" name="name" id="pac-name" ng-model="cellphone">
                  </div>
                </div>
                <div class="row fieldrow">
                  <div class="col-sm-6">
                    <label for="pac-name" class="control-label">Acudiente</label>
                    <input type="text" class="form-control" placeholder="" name="name" id="pac-name" ng-model="company">
                  </div>
                  <div class="col-sm-6">
                    <label for="pac-name" class="control-label">Telefono acudiente</label>
                    <input type="text" class="form-control" placeholder="" name="name" id="pac-name" ng-model="companyphone">
                  </div>
                </div>
                <div class="row fieldrow">
                  <div class="col-sm-6">
                    <label for="pac-name" class="control-label">EPS</label>
                    <input type="text" class="form-control" placeholder="" name="name" id="pac-name" ng-model="eps">
                  </div>
                  <div class="col-sm-6">
                    <label for="pac-name" class="control-label">Religion</label>
                    <input type="text" class="form-control" placeholder="" name="name" id="pac-name" ng-model="religion">
                  </div>
                </div>
                <div class="row fieldrow">
                  <div class="col-sm-6">
                    <label for="pac-name" class="control-label">Referenciado por</label>
                    <input type="text" class="form-control" placeholder="" name="name" id="pac-name" ng-model="reference">
                  </div>
                  <div class="col-sm-3 col-sm-offset-2">

                   <button type="button" class="btn btn-primary" style="margin-top:24px;" id="SaveWaiting" ng-click="saveData()">Guardar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/general.js"></script>
    <script src="js/app/UserCtrl.js"></script>
  </body>
</html>