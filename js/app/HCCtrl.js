SHapp.controller('HCCtrl',['$http','$scope','$interval','$q',function($http, $scope, $interval, $q) {
	$scope.init = function(id,type,hcid) {
		$scope.document = id;
		$scope.type = type;
		$scope.hcid = hcid;
		
		$scope.CreateMotive();
		$scope.CreateSystems();
		$scope.CreateSymptoms();
		$scope.CreateBackGround();
		$scope.CreatePhysic();
		$scope.CreateAnalisys();
		$scope.CreateDiag();
		$scope.LoadMed();
		$scope.LoadExa();
	}
	
	$scope.CreateMotive = function(){
		if($scope.hcid != null && 
				$scope.hcid != undefined){
			$http.post('/saludholistica/datamethods/InsertMotive.php',{
				HCId : $scope.hcid
			}).success(function(data, status,headers, config) {
				$scope.HCindex = data[0];
				$scope.motive = data[2];
				$scope.symptom = data[3];
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
	$scope.UpdateMotive = function(){
		if($scope.hcid != null && $scope.hcid != undefined){
			$http.post('/saludholistica/datamethods/UpdateMotive.php',{
				index : $scope.HCindex,
				Motive : $scope.motive,
				Symptom : $scope.symptom
			}).success(function(data, status,headers, config) {
				
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
	$scope.CreateSystems = function(){
		if($scope.hcid != null && 
				$scope.hcid != undefined){
			$http.post('/saludholistica/datamethods/InsertSystem.php',{
				HCId : $scope.hcid
			}).success(function(data, status,headers, config) {
				$scope.HCsystemindex = data[0];
				$scope.sys1 = data[2];
				$scope.sys2 = data[3];
				$scope.sys3 = data[4];
				$scope.sys4 = data[5];
				$scope.sys5 = data[6];
				$scope.sys6 = data[7];
				$scope.sys7 = data[8];
				$scope.sys8 = data[9];
				$scope.sys9 = data[10];
				$scope.sys10 = data[11];
				$scope.sys11 = data[12];
				$scope.sys12 = data[13];
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
	$scope.UpdateSystem = function(){
		if($scope.hcid != null && $scope.hcid != undefined){
			$http.post('/saludholistica/datamethods/UpdateSystem.php',{
				index : $scope.HCsystemindex,
				sys1: $scope.sys1,
				sys2: $scope.sys2,
				sys3: $scope.sys3,
				sys4: $scope.sys4,
				sys5: $scope.sys5,
				sys6: $scope.sys6,
				sys7: $scope.sys7,
				sys8: $scope.sys8,
				sys9: $scope.sys9,
				sys10: $scope.sys10,
				sys11: $scope.sys11,
				sys12: $scope.sys12
			}).success(function(data, status,headers, config) {
				
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
	$scope.CreateSymptoms = function(){
		if($scope.hcid != null && 
				$scope.hcid != undefined){
			$http.post('/saludholistica/datamethods/InsertSymptom.php',{
				HCId : $scope.hcid
			}).success(function(data, status,headers, config) {
				$scope.HCsymptomsindex = data[0];
				$scope.symptom1 = data[2];
				$scope.symptom2 = data[3];
				$scope.symptom3 = data[4];
				$scope.symptom4 = data[5];
				$scope.symptom5 = data[6];
				$scope.symptom6 = data[7];	
				$scope.symptom7 = data[8];
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
	$scope.UpdateSymptom = function(){
		if($scope.hcid != null && $scope.hcid != undefined){
			$http.post('/saludholistica/datamethods/UpdateSymptom.php',{
				index : $scope.HCsymptomsindex,
				symptom1: $scope.symptom1,
				symptom2: $scope.symptom2,
				symptom3: $scope.symptom3,
				symptom4: $scope.symptom4,
				symptom5: $scope.symptom5,
				symptom6: $scope.symptom6,
				symptom7: $scope.symptom7
			}).success(function(data, status,headers, config) {
				
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
	
	$scope.CreateBackGround = function(){
		if($scope.hcid != null && 
				$scope.hcid != undefined){
			$http.post('/saludholistica/datamethods/InsertBackGround.php',{
				HCId : $scope.hcid
			}).success(function(data, status,headers, config) {
				$scope.HCbackgroundindex = data[0];
				$scope.back1 = data[2];
				$scope.back2 = data[3];
				$scope.back3 = data[4];
				$scope.back4 = data[5];
				$scope.back5 = data[6];
				$scope.back6 = data[7];
				$scope.back7 = data[8];
				$scope.back8 = data[9];
				$scope.back9 = data[10];
				$scope.back10 = data[11];
				$scope.back11 = data[12];
				$scope.back12 = data[13];
				$scope.back13 = data[14];
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
	$scope.UpdateBackGround = function(){
		if($scope.hcid != null && $scope.hcid != undefined){
			$http.post('/saludholistica/datamethods/UpdateBackGround.php',{
				index : $scope.HCbackgroundindex,
				back1: $scope.back1,
				back2: $scope.back2,
				back3: $scope.back3,
				back4: $scope.back4,
				back5: $scope.back5,
				back6: $scope.back6,
				back7: $scope.back7,
				back8: $scope.back8,
				back9: $scope.back9,
				back10: $scope.back10,
				back11: $scope.back11,
				back12: $scope.back12,
				back12: $scope.back13
			}).success(function(data, status,headers, config) {
				
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
	$scope.CreatePhysic = function(){
		if($scope.hcid != null && 
				$scope.hcid != undefined){
			$http.post('/saludholistica/datamethods/InsertPhysic.php',{
				HCId : $scope.hcid
			}).success(function(data, status,headers, config) {
				$scope.HCphysicindex = data[0];
				$scope.phy1 = data[2];
				$scope.phy2 = data[3];
				$scope.phy3 = data[4];
				$scope.phy4 = data[5];
				$scope.phy5 = data[6];
				$scope.phy6 = data[7];
				$scope.phy7 = data[8];
				$scope.phy8 = data[9];
				$scope.phy9 = data[10];
				$scope.phy10 = data[11];
				$scope.phy11 = data[12];
				$scope.phy12 = data[13];
				$scope.phy13 = data[14];
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
	$scope.UpdatePhysic = function(){
		if($scope.hcid != null && $scope.hcid != undefined){
			if($scope.phy5 != null && $scope.phy5 != undefined && $scope.phy5 != "" && $scope.phy4 != null && $scope.phy4 != undefined && $scope.phy4 != "" ){
			$scope.phy12 = ($scope.phy5)/($scope.phy4*$scope.phy4);			
			}
			if($scope.phy7 != null && $scope.phy7 != undefined && $scope.phy7 != "" && $scope.phy8 != null && $scope.phy8 != undefined && $scope.phy8 != "" ){
				$scope.phy13 = ($scope.phy7)/($scope.phy8);			
			}
			$http.post('/saludholistica/datamethods/UpdatePhysic.php',{
				index : $scope.HCphysicindex,
				phy1: $scope.phy1,
				phy2: $scope.phy2,
				phy3: $scope.phy3,
				phy4: $scope.phy4,
				phy5: $scope.phy5,
				phy6: $scope.phy6,
				phy7: $scope.phy7,
				phy8: $scope.phy8,
				phy9: $scope.phy9,
				phy10: $scope.phy10,
				phy11: $scope.phy11,
				phy12: $scope.phy12,
				phy13: $scope.phy13,
			}).success(function(data, status,headers, config) {
				
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
	$scope.CreateAnalisys = function(){
		if($scope.hcid != null && 
				$scope.hcid != undefined){
			$http.post('/saludholistica/datamethods/InsertAnalisys.php',{
				HCId : $scope.hcid
			}).success(function(data, status,headers, config) {
				$scope.HCanalisysindex = data[0];
				$scope.ana1 = data[2];
				$scope.ana2 = data[3];
				$scope.ana3 = data[4];
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
	$scope.UpdateAnalisys = function(){
		if($scope.hcid != null && $scope.hcid != undefined){
			$http.post('/saludholistica/datamethods/UpdateAnalisys.php',{
				index : $scope.HCanalisysindex,
				ana1: $scope.ana1,
				ana2: $scope.ana2,
				ana3: $scope.ana3
			}).success(function(data, status,headers, config) {
				
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
	$scope.CreateDiag = function(){
		if($scope.hcid != null && 
				$scope.hcid != undefined){
			$http.post('/saludholistica/datamethods/InsertDiag.php',{
				HCId : $scope.hcid
			}).success(function(data, status,headers, config) {
				$scope.HCdiagindex = data[0];
				$scope.diag1 = data[2];
				$scope.diag2 = data[3];
				$scope.diag3 = data[4];
				$scope.diag4 = data[5];
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
	$scope.UpdateDiag = function(){
		if($scope.hcid != null && $scope.hcid != undefined){
			$http.post('/saludholistica/datamethods/UpdateDiag.php',{
				index : $scope.HCdiagindex,
				diag1: $scope.diag1,
				diag2: $scope.diag2,
				diag3: $scope.diag3,
				diag4: $scope.diag4
			}).success(function(data, status,headers, config) {
				
			}).error(	function(data, status,headers, config) {
				
		});
		}
	}
	
	$scope.SearchCie = function(){
		if($scope.ciecode == null || $scope.ciecode == undefined || $scope.ciecode == ""){
			$scope.ciecode == "";
		}
		if($scope.ciename == null || $scope.ciename == undefined || $scope.ciename == ""){
			$scope.ciename == "";
		}
		$http.post('/saludholistica/datamethods/SearchCie.php',{
			code: $scope.ciecode,
			ciename: $scope.ciename
		}).success(function(data, status,headers, config) {
			$scope.Ciedata = data;
		}).error(	function(data, status,headers, config) {
			
	});
	}
	
	$scope.addCie = function(codigo) {
		$http.post('/saludholistica/datamethods/InsertCie.php',{
			code: codigo,
			HCId : $scope.hcid
		}).success(function(data, status,headers, config) {
			$scope.Ciecodes = data
		}).error(	function(data, status,headers, config) {
	});
	}
	
	$scope.Finish = function(){
		$http.post('/saludholistica/datamethods/Finish.php',{
			HCId : $scope.hcid,
			HCindex: $scope.HCindex,
			systemindex : $scope.HCsystemindex,
			symptomindex : $scope.HCsymptomsindex,
			backindex : $scope.HCbackgroundindex,
			physicindex : $scope.HCphysicindex,
			analisysindex : $scope.HCanalisysindex,
			diagindex : $scope.HCdiagindex
		}).success(function(data, status,headers, config) {
			
		}).error(	function(data, status,headers, config) {
		});
	}
	
	$scope.AddMed = function(){
		if($scope.medAdded != null && $scope.medAdded != undefined && $scope.medAdded != ""){
			$http.post('/saludholistica/datamethods/AddMed.php',{
				HCId : $scope.hcid,
				Med: $scope.medAdded
			}).success(function(data, status,headers, config) {
				$scope.meddata = data,
				$('#medModal').modal('hide')
			}).error(	function(data, status,headers, config) {
			});
		}
	}
	
	$scope.LoadMed = function(){
		$http.post('/saludholistica/datamethods/LoadMed.php',{
			HCId : $scope.hcid,
		}).success(function(data, status,headers, config) {
			$scope.meddata = data
		}).error(	function(data, status,headers, config) {
		});
	}
	
	$scope.UpdMedStt = function(medid, tostat){
		$http.post('/saludholistica/datamethods/UpdateMed.php',{
			HCId : $scope.hcid,
			MedId : medid,
			ToStat : tostat
		}).success(function(data, status,headers, config) {
			$scope.meddata = data
		}).error(	function(data, status,headers, config) {
		});
	}
	
	$scope.AddExa = function(){
		if($scope.exaname != null && $scope.exaname != undefined && $scope.exaname != ""){
			$http.post('/saludholistica/datamethods/AddExa.php',{
				HCId : $scope.hcid,
				Exa: $scope.exaname
			}).success(function(data, status,headers, config) {
				$scope.exadata = data,
				$('#exaModal').modal('hide')
			}).error(	function(data, status,headers, config) {
			});
		}
	}
	
	$scope.setexachange = function(id,name,result){
		$scope.exaid=id;
		$scope.exaname=name;
		$scope.exares=result;
	}
	
	$scope.LoadExa = function(){
		$http.post('/saludholistica/datamethods/LoadExa.php',{
			HCId : $scope.hcid,
		}).success(function(data, status,headers, config) {
			$scope.exadata = data
		}).error(	function(data, status,headers, config) {
		});
	}
	
	$scope.UpdExa = function(){
		$http.post('/saludholistica/datamethods/UpdateExa.php',{
			HCId : $scope.hcid,
			id : $scope.exaid,
			res : $scope.exares,
			name : $scope.exaname
		}).success(function(data, status,headers, config) {
			$scope.exadata = data,
			$('#exaupdModal').modal('hide')
		}).error(	function(data, status,headers, config) {
		});
	}
	
} ]);
