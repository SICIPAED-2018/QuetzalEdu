//alert('UsersController');

var app = angular.module("Users",['angular-loading-bar']);

app.config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
    cfpLoadingBarProvider.includeSpinner = false;
  	}]);

app.controller("UsersController",function($scope, $http){

	//$scope.mostrarCargando = true;
	console.log("UsersController");
	$scope.users = {};
	$scope.newUser = {};
	$scope.editUser = {};
	$scope.message = "";
	$scope.message_error = "";

	$http.get("http://localhost:8000/getUsers")
		.then(function(data){
			console.log(data);
			$scope.users = data.data;
			//$scope.mostrarCargando = false;
		},
		function(err){
			console.log(err);
			//alert("error");
		});


		
	
		$scope.setUser = function(){
		$http.post("http://localhost:8000/setUsers",{
			name: $scope.newUser.name,
			email: $scope.newUser.email,
			password: $scope.newUser.password
		})
		.then(function(data,status,headers,config){
			//console.log($scope.newUser);
			console.log(data);
			$scope.message = "¡Usuario "+$scope.newUser.name+" agregado satisfactoriamente!";
			//$scope.message = "Usuario agregado satisfactoriamente."
			$scope.users = data.data;
			/*$scope.users.push($scope.newUser);*/
			$scope.newUser = {};

		},
		function(err){
			console.log(err);
			$scope.message_error = err.data.errors;
			$scope.message = "";
			//alert("error");
		});
		}



	$scope.selectUser = function(user){

		console.log(user);
		//alert(user);
		$scope.editUser = user;

		//$scope.users.push($scope.newUser);

		//$scope.users.splice($scope.user);

		//$scope.users.splice($user, 1);
	}



	$scope.updateUser = function(dato){
		//$scope.editUser = user;
		$http.put("http://localhost:8000/updateUsers/"+dato,{
			name: $scope.editUser.name,
			email: $scope.editUser.email,
		})
		.then(function(data,status,headers,config){
		         // success callback
		         alert('llego aqui');
		         console.log(data);
		         $scope.message = "¡Usuario "+$scope.editUser.name+" editado satisfactoriamente!";
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

	$scope.deleteUser = function(dato){
		
		$http.delete("http://localhost:8000/deleteUsers/"+dato)
		.then(function(data,status,headers,config){
		         // success callback
		         //alert('llego aqui');
		         //elimina en tiempo real
		         $scope.users.splice($scope.users.indexOf($scope.editUser), 1);
		         console.log(data);
		         $scope.message = "¡Usuario "+$scope.editUser.name+" eliminado satisfactoriamente!";
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
