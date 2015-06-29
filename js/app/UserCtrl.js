SHapp.controller('userCtrl', ['$http', '$scope', '$interval', '$q', function ($http, $scope, $interval, $q) {
	
	$scope.init= function(){
		$scope.Iddocument = null;
		$scope.Idtype= null;
		$scope.name = null;
		$scope.borndate = null;
		$scope.bornplace = null;
		$scope.civilstate = null;
		$scope.gender = null;
		$scope.ocupation = null;
		$scope.procedencia = null;
		$scope.address = null;
		$scope.phone = null;
		$scope.cellphone = null;
		$scope.company = null;
		$scope.companyphone = null;
		$scope.eps = null;
		$scope.religion = null;
		$scope.reference  = null;
	};
	
	$scope.saveData = function(){
		$http.post('/saludholistica/datamethods/insertUser.php', {
			Iddocument: $scope.Iddocument, 
			Idtype: $scope.Idtype,
			name: $scope.name,
			borndate: $scope.borndate,
			bornplace: $scope.bornplace,
			civilstate: $scope.civilstate,
			gender: $scope.gender,
			ocupation: $scope.ocupation,
			procedencia: $scope.procedencia,
			address: $scope.address,
			phone: $scope.phone,
			cellphone: $scope.cellphone,
			company: $scope.company,
			companyphone: $scope.companyphone,
			eps: $scope.eps,
			religion: $scope.religion,
			reference: $scope.reference
			}).success(function (data, status, headers, config) {
            alert(data);
        }).error(function (data, status, headers, config) {
        });
	}

	$scope.$watch('bornday', function() {
        if($scope.bornday != null && $scope.bornday != undefined && $scope.bornmonth != null && $scope.bornmonth != undefined && $scope.bornyear!=null && $scope.bornyear != undefined){
          $scope.calcAge();
        };
    });

    $scope.$watch('bornmonth', function() {
        if($scope.bornday != null && $scope.bornday != undefined && $scope.bornmonth != null && $scope.bornmonth != undefined && $scope.bornyear!=null && $scope.bornyear != undefined){
          $scope.calcAge();
        };
    });

    $scope.$watch('bornyear', function() {
        if($scope.bornday != null && $scope.bornday != undefined && $scope.bornmonth != null && $scope.bornmonth != undefined && $scope.bornyear!=null && $scope.bornyear != undefined){
          $scope.calcAge();
        };
    });
    
    $scope.calcAge = function(){
    	var now = new Date();
    	var yearNow = now.getYear()+1900;
		var monthNow = now.getMonth()+1;
		var dateNow = now.getDate();
		var years = yearNow - parseInt($scope.bornyear);
		var months = monthNow - parseInt($scope.bornmonth);
		var days = dateNow - parseInt($scope.bornday);
		var bdays = parseInt($scope.bornday);
		var byears = parseInt($scope.bornyear);
		var bmonths = parseInt($scope.bornmonth)-1;
		var bdate = new Date(byears,bmonths,bdays);
    	$scope.borndate = String(bdate);
    	if(months<0){
    		$scope.age=years-1;
    	}else if(months==0){
    		if(days<0){
    			$scope.age=years-1;
    		}else{
    			$scope.age=years;
    		}
    	}else if(months>0){
    		$scope.age=years;
    	}

    }

}]);