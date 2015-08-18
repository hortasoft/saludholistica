SHapp.controller('HCCtrl',['$http','$scope','$interval','$q',function($http, $scope, $interval, $q) {
	$scope.init = function(id,type,hcid) {
		$scope.document = id;
		$scope.type = type;
		$scope.hcid = hcid;
		
		$scope.CreateMotive();
	}
	
	$scope.CreateMotive = function(){
		if($scope.hcid != null && 
				$scope.hcid != undefined){
			$http.post('/saludholistica/datamethods/InsertMotive.php',{
				HCId : $scope.hcid
			}).success(function(data, status,headers, config) {
				$scope.HCindex = data[0];
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
	$scope.UpdateMotive = function(){
		if($scope.hcid != null && $scope.hcid != undefined){
			$http.post('/saludholistica/datamethods/UpdateMotive.php',{
				index : $scope.HCindex,
				Motive : $scope.motive
			}).success(function(data, status,headers, config) {
				
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
} ]);
