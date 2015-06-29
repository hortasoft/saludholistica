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
    <link href="css/scheduler/dhtmlxscheduler.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/schedule.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="init();" ng-app="SHapp">
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
             <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Agenda<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="active"><a href="#">General</a></li>
                <li><a href="agendaodonto.php">Odontologia</a></li>
               <!--  <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li> -->
              </ul>
            </li>
            <li ><a href="user.php">Historia Clinica</a></li>            
           
          </ul>
                
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container" ng-controller="WaitingCtrl" ng-init="section=0">
      <div class="col-sm-3 col-lg-4">
        <div class="panel panel-primary" id="WaitingPanel">
          <div class="panel-heading">LISTA DE ESPERA</div>
          <div class="panel-body">
            <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#addPac">Agregar a lista de espera</button>
            <ul class="list-group" id="WaitingList">

              <li class="list-group-item" ng-class="PersonClass(person.priority)"  ng-repeat="person in Waiting" >
                <div class="row">  
                  <div class="col-md-9" ng-click="addEvent($index)">
                    <strong>{{person.name}}</strong>
                    <p>{{person.description}}</p>
                  </div>
                  <div class="col-md-3">
                    <button type="button" class="btn btn-default" id="DeleteUser" ng-click="changePersonStatus(person.name)">X</button>
                  </div>  
                </div>    
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-sm-9 col-lg-8">
        <div class="panel panel-primary">
          <div class="panel-heading">AGENDA MEDICINA GENERAL</div>
          <div class="panel-body" style = "height:550px;">
            <div id="scheduler_here" class="dhx_cal_container" style='width:100%; height:100%;'>
                <div class="dhx_cal_navline">
                    <div class="dhx_cal_prev_button">&nbsp;</div>
                    <div class="dhx_cal_next_button">&nbsp;</div>
                    <div class="dhx_cal_today_button"></div>
                    <div class="dhx_cal_date" style="margin-top:40px;"></div>
                    <div class="dhx_cal_tab" name="day_tab" style="right: auto; left: 14px;"></div>
                    <div class="dhx_cal_tab" name="week_tab" style="right: auto; left: 75px;"></div>
                    <div class="dhx_cal_tab" name="month_tab" style="right: auto; left: 136px;"></div>
                    <div class="dhx_cal_tab" name="agenda_tab" style="right: auto; left: 211px;"></div>
                </div>
                
                <div class="dhx_cal_header" style="margin-top:20px;"></div>
                <div class="dhx_cal_data" style="margin-top:20px;"></div>       
                
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
    <div class="modal fade" id="addPac" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Agregar paciente a lista de espera</h4>
          </div>
          <!-- <form id="waitingForm" action="datamethods/waiting.php"> -->
          <div class="modal-body">
            <div class="container-fluid">
              <input type="hidden" id="section" value="0" />
              <div class="row">
                <label for="pac-name" class="control-label">Nombre</label>
                <input type="text" class="form-control" placeholder="" name="name" id="pac-name" ng-model="name">
              </div>
              <br>
              <div class="row">
                <label for="pac-phone" class="control-label">Telefono</label>
                <input type="text" class="form-control" placeholder="" name="phone" id="pac-phone" ng-model="phone">
              </div>
              <br>
              <div class="row">
                <label for="pac-desc" class="control-label">Descripcion</label>
                <input type="text" class="form-control" placeholder="" name="desc" id="pac-desc" ng-model="desc">
              </div>
              
              <div class="row">
                <div class="btn-group" data-toggle="buttons" id="PriorityButtons">
                  <label class="btn btn-danger">
                    <input type="radio" name="priority" id="option1" value="1"> ALTA 
                  </label>
                  <label class="btn btn-warning">
                    <input type="radio" name="priority" id="option1" value="2"> MEDIA
                  </label>
                  <label class="btn btn-info">
                    <input type="radio" name="priority" id="option1" value="3" > BAJA
                  </label>
                </div>             
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" id="SaveWaiting" ng-click="postPerson()">Guardar</button>
          </div>
          <!-- </form> -->
        </div>
      </div>
    </div>
    </div>

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/scheduler/dhtmlxscheduler.js"></script>
    <script src="js/scheduler/ext/dhtmlxscheduler_agenda_view.js" ></script>
    <script src="js/scheduler/ext/dhtmlxscheduler_minical.js"></script>
    <script src="js/scheduler/locale/locale_es.js" charset="utf-8"></script>    
    <script src="js/sch_init.js"></script>
    <script src="js/general.js"></script>
    <script src="js/app/WaitingCtrl.js"></script>

    <script>
     

      
    </script>
  </body>
</html>