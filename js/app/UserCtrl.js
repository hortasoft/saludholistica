SHapp.controller('userCtrl',['$http','$scope','$interval','$q',function($http, $scope, $interval, $q) {

		$scope.init = function() {
			$scope.Iddocument = null;
			$scope.Idtype = null;
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
			$scope.reference = null;
		};

		$scope.saveData = function() {
			if ($scope.Iddocument != null
					&& $scope.Iddocument != undefined
					&& $scope.Idtype != null
					&& $scope.Idtype != undefined
					&& $scope.name != null
					&& $scope.name != undefined
					&& $scope.borndate != null
					&& $scope.borndate != undefined
					&& $scope.bornplace != null
					&& $scope.bornplace != undefined) {
				$http.post('/saludholistica/datamethods/insertUser.php',{
									Iddocument : $scope.Iddocument,
									Idtype : $scope.Idtype,
									name : $scope.name,
									borndate : $scope.borndate,
									bornplace : $scope.bornplace,
									civilstate : $scope.civilstate,
									gender : $scope.gender,
									ocupation : $scope.ocupation,
									procedencia : $scope.procedencia,
									address : $scope.address,
									phone : $scope.phone,
									cellphone : $scope.cellphone,
									company : $scope.company,
									companyphone : $scope.companyphone,
									eps : $scope.eps,
									religion : $scope.religion,
									reference : $scope.reference
								}).success(function(data, status,headers, config) {
									if(data){
										alert("Creacion exitosa");
									}else{
										alert("El Paciente ya existe");
									}
								}).error(function(data, status,headers, config) {
									
								});
			} else {
				if ($scope.Iddocument == null
						|| $scope.Iddocument == undefined) {
					$("#docinput").addClass("has-error");
				}
				if ($scope.Idtype == null
						|| $scope.Idtype == undefined) {
					$("#doctypeinput")
							.addClass("has-error");
				}
				if ($scope.name == null
						|| $scope.name == undefined) {
					$("#nameinput").addClass("has-error");
				}
				if ($scope.borndate == null
						|| $scope.borndate == undefined) {
					$("#borndateinput").addClass(
							"has-error");
				}
				if ($scope.bornplace == null
						|| $scope.bornplace == undefined) {
					$("#bornplaceinput").addClass(
							"has-error");
				}
			}
		}

		$scope.SearchPatient = function() {
			$http.post('/saludholistica/datamethods/SearchUser.php',{
				Iddocument : $scope.Iddocument,
				Idtype : $scope.Idtype
			}).success(function(data, status,headers, config) {
				alert(data);
			}).error(	function(data, status,headers, config) {
				
			});
		}

		$scope.$watch('bornday', function() {
			if ($scope.bornday != null
					&& $scope.bornday != undefined
					&& $scope.bornmonth != null
					&& $scope.bornmonth != undefined
					&& $scope.bornyear != null
					&& $scope.bornyear != undefined) {
				$scope.calcAge();
				$scope.borndate = new Date($scope.bornyear,
						$scope.bornmonth, $scope.bornday);
			}
			;
		});

		$scope.$watch('bornmonth', function() {
			if ($scope.bornday != null
					&& $scope.bornday != undefined
					&& $scope.bornmonth != null
					&& $scope.bornmonth != undefined
					&& $scope.bornyear != null
					&& $scope.bornyear != undefined) {
				$scope.calcAge();
				$scope.borndate = new Date($scope.bornyear,
						$scope.bornmonth, $scope.bornday);
			}
			;
		});

		$scope.$watch('bornyear', function() {
			if ($scope.bornday != null
					&& $scope.bornday != undefined
					&& $scope.bornmonth != null
					&& $scope.bornmonth != undefined
					&& $scope.bornyear != null
					&& $scope.bornyear != undefined) {
				$scope.calcAge();
				$scope.borndate = new Date($scope.bornyear,
						$scope.bornmonth - 1,
						$scope.bornday);
			}
			;
		});

		$scope.calcAge = function() {
			var now = new Date();
			var yearNow = now.getYear() + 1900;
			var monthNow = now.getMonth() + 1;
			var dateNow = now.getDate();
			var years = yearNow - parseInt($scope.bornyear);
			var months = monthNow
					- parseInt($scope.bornmonth);
			var days = dateNow - parseInt($scope.bornday);
			var bdays = parseInt($scope.bornday);
			var byears = parseInt($scope.bornyear);
			var bmonths = parseInt($scope.bornmonth) - 1;
			var bdate = new Date(byears, bmonths, bdays);
			$scope.borndate = String(bdate);
			if (months < 0) {
				$scope.age = years - 1;
			} else if (months == 0) {
				if (days < 0) {
					$scope.age = years - 1;
				} else {
					$scope.age = years;
				}
			} else if (months > 0) {
				$scope.age = years;
			}

		}

	} ]);