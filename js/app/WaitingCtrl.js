SHapp.controller('WaitingCtrl', ['$http', '$scope', '$interval', '$q', function ($http, $scope, $interval, $q) {
	$scope.priority = "0";
	$scope.GetWaitings = function () {
        $http.post('/saludholistica/datamethods/GetWaiting.php', {section: $scope.section}).success(function (data, status, headers, config) {
            $scope.Waiting = data;
        }).error(function (data, status, headers, config) {
        });
    };

    $scope.PersonClass = function(priority){
    	var classaux = "list-group-item-default";
    	switch(priority){
    		case "1":
    		classaux = "list-group-item-danger";
    		break;
    		case "2":
    		classaux ="list-group-item-warning";
    		break;
    		case "3":
    		classaux = "list-group-item-info";
    		break;
    	}
    	return classaux;
    };
    

    $scope.postPerson = function(){
    	$scope.priority = $('input[name=priority]:checked').val();
    	$http.post('/saludholistica/datamethods/waiting.php', {name: $scope.name , phone: $scope.phone, desc: $scope.desc, priority: $scope.priority, section: $scope.section}).success(function (data, status, headers, config) {
            $('#addPac').modal('hide');
            $scope.GetWaitings();
        }).error(function (data, status, headers, config) {
        });
    };

    $scope.setPriority = function(priority){
    	$scope.priority = priority
    };

    $scope.addEvent = function(personindex){
    	var person = $scope.Waiting[personindex];
    	scheduler.addEventNow({
		    name: person.name,
		    phone: person.phone,
		    text:  person.description 
		});
    };

    $scope.changePersonStatus = function(personName){
    	$http.post('/saludholistica/datamethods/WaitingStatusChange.php', {name: personName, section: $scope.section}).success(function (data, status, headers, config) {
            $scope.GetWaitings();
        }).error(function (data, status, headers, config) {
        });
    }
    $scope.$watch('section', function() {
        if($scope.section != null && $scope.section != undefined){
          $scope.GetWaitings();
        };
    });
    
}]);


//$('#waitingForm').submit(function(e) {
// 	var form = $(this);
// 	var data= new FormData();
// 	data = $(this).serialize();
// 	$.ajax({
// 		url:  form.attr('action'),
// 		type: "POST",
// 		data: data,
// 		success: function(result){
// 			$('#addPac').modal('hide')
// 		},
// 		error: function (error) {
// 			alert("error");
// 		}
// 	});
// 	e.preventDefault()
// });