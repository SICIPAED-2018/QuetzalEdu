//alert('UsersController');

var app = angular.module("Areas",['angular-loading-bar']);

app.config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
    cfpLoadingBarProvider.includeSpinner = false;
  	}]);

app.controller("AreasController",function($scope, $http){

	//$scope.mostrarCargando = true;
	console.log("AreasController");
	$scope.areas = {};
	$scope.newArea = {};
	$scope.editArea = {};
	$scope.message = "";
	$scope.message_error = "";

	$http.get("http://localhost:8000/getAreas")
		.then(function(data){
			console.log(data);
			$scope.areas = data.data;
			//$scope.mostrarCargando = false;
		},
		function(err){
			console.log(err);
			//alert("error");
		});


		
	
		$scope.setArea = function(){
		$http.post("http://localhost:8000/setAreas",{
			area_conocimiento: $scope.newArea.area_conocimiento,
			informacion_general: $scope.newArea.informacion_general,
			video_general: $scope.newArea.video_general
		})
		.then(function(data,status,headers,config){
			//console.log($scope.newUser);
			console.log(data);
			$scope.message = "¡Area "+$scope.newArea.area_conocimiento+" agregada satisfactoriamente!";
			//$scope.message = "Usuario agregado satisfactoriamente."
			$scope.areas = data.data;
			/*$scope.users.push($scope.newUser);*/
			$scope.newArea = {};

		},
		function(err){
			console.log(err);
			$scope.message_error = err.data.errors;
			$scope.message = "";
			//alert("error");
		});
		}



	$scope.selectArea = function(area){

		console.log(area);
		//alert(user);
		$scope.editArea = area;

		//$scope.users.push($scope.newUser);

		//$scope.users.splice($scope.user);

		//$scope.users.splice($user, 1);
	}



	$scope.updateArea = function(dato){
		//$scope.editUser = user;
		$http.put("http://localhost:8000/updateAreas/"+dato,{
			area_conocimiento: $scope.editArea.area_conocimiento,
			
		})
		.then(function(data,status,headers,config){
		         // success callback
		         alert('llego aqui');
		         console.log(data);
		         $scope.message = "¡Area "+$scope.editArea.area_conocimiento+" editada satisfactoriamente!";
		         //$scope.message = "Usuario editado satisfactoriamente."
		         $scope.message_error = "";
		}, 
		function(err){
			alert("error");
			$scope.message = err.data;
		});
		} 

	/*$scope.updateUser = function(){

	};*/

	$scope.deleteArea = function(dato){
		
		$http.delete("http://localhost:8000/deleteAreas/"+dato)
		.then(function(data,status,headers,config){
		         // success callback
		         //alert('llego aqui');
		         //elimina en tiempo real
		         $scope.areas.splice($scope.areas.indexOf($scope.editArea), 1);
		         console.log(data);
		         $scope.message = "¡Area "+$scope.editArea.area_conocimiento+" eliminada satisfactoriamente!";
		         //$scope.message = "Usuario eliminado satisfactoriamente."
		}, 
		function(err){
			alert("error");
		});
	};


	$scope.clearMessage = function(){
		$scope.message = "";
		$scope.message_error = "";
	};

	});
