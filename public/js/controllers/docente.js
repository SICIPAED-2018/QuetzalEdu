var app = angular.module('myApp', ['ngRoute','angular-loading-bar']);

app.config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
    cfpLoadingBarProvider.includeSpinner = false;
    }]);

app.config(function($routeProvider) {
  $routeProvider
  .when('/', {
    templateUrl : 'inicio',
    controller  : 'AreasController'
  })
  .when('/showCurso/:cursoId', {
    templateUrl : 'showCurso/cursoId',
    controller  : 'CursoController'
  })
  .when('/getCurso/:cursoId', {
    templateUrl : 'getCurso/cursoId',
    controller  : 'CursoController'
  })
  .otherwise({redirectTo: '/'});
});


/********************AreasController********************/

/* falta agregar files js */

app.controller("AreasController",function($scope, $http, $location){
  //$scope.mostrarCargando = true;
  console.log("AreasController");
  $scope.areas = [];
  $scope.newArea = [];
  $scope.editArea = [];
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
      var fd = new FormData();
      //var areaCon = $scope.newArea.area_conocimiento;
      var infoGen = $scope.newArea.informacion_general;
      var areaCon = $scope.newArea.area_conocimiento;
      //var areaImg = $scope.newArea.imagen_general;

      alert(infoGen);
      var vidGen = $scope.newArea.video_general;
      var imgGen = $scope.newArea.imagen_general;
      //fd.append('area_conocimiento', areaCon);
      fd.append('informacion_general',infoGen);
      fd.append('area_conocimiento', areaCon);
      fd.append('video_general',vidGen);
      fd.append('imagen_general',imgGen);

      $http.post("http://localhost:8000/setAreas", fd,{
      /*area_conocimiento: $scope.newArea.area_conocimiento,
      informacion_general: $scope.newArea.informacion_general,
      video_general: $scope.newArea.video_general*/
      file: angular.identity,
      headers: {'Content-Type': undefined},
      //area_conocimiento: $scope.newArea.area_conocimiento,
    })
    .then(function(data,status,headers,config){
      //console.log($scope.newUser);
      console.log(data);
      $scope.message = "¡Area "+$scope.newArea.area_conocimiento+" agregada satisfactoriamente!";
      //$scope.message = "Usuario agregado satisfactoriamente."
      $scope.areas = data.data;
      /*$scope.users.push($scope.newUser);*/
      /*$scope.newArea.area_conocimiento = null;*/
      $scope.newArea = {};
    },
    function(err){
      console.log(err);
      $scope.message_error = err.data.errors;
      $scope.message = "";
      //alert("error");
    });
    }

    $scope.goCurso = function(area){
    console.log(area);

    $scope.editArea = area;
    $location.url('/showCurso/'+$scope.editArea.id);


    //alert(user);
    //$scope.editArea = area;
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
             //alert('llego aqui');
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
    })



/********************CursoController********************/

/* falta agregar files js */

app.controller("CursoController",function($scope, $http, $routeParams, $location){
  //$scope.mostrarCargando = true;
  console.log("CursoController");
  $scope.curso = [];
  $scope.newArea = [];
  $scope.editArea = [];
  $scope.message = "";
  $scope.message_error = "";

  $http.get("http://localhost:8000/getCurso/"+$routeParams.cursoId)
    .then(function(data){
      console.log(data);
      $scope.curso = data.data;
      //$scope.mostrarCargando = false;
    },
    function(err){
      console.log(err);
      //alert("error");
    });

    $scope.setArea = function(){
      var fd = new FormData();
      //var areaCon = $scope.newArea.area_conocimiento;
      var infoGen = $scope.newArea.informacion_general;
      var areaCon = $scope.newArea.area_conocimiento;
      //var areaImg = $scope.newArea.imagen_general;

      alert(infoGen);
      var vidGen = $scope.newArea.video_general;
      var imgGen = $scope.newArea.imagen_general;
      //fd.append('area_conocimiento', areaCon);
      fd.append('informacion_general',infoGen);
      fd.append('area_conocimiento', areaCon);
      fd.append('video_general',vidGen);
      fd.append('imagen_general',imgGen);

      $http.post("http://localhost:8000/setAreas", fd,{
      /*area_conocimiento: $scope.newArea.area_conocimiento,
      informacion_general: $scope.newArea.informacion_general,
      video_general: $scope.newArea.video_general*/
      file: angular.identity,
      headers: {'Content-Type': undefined},
      //area_conocimiento: $scope.newArea.area_conocimiento,
    })
    .then(function(data,status,headers,config){
      //console.log($scope.newUser);
      console.log(data);
      $scope.message = "¡Area "+$scope.newArea.area_conocimiento+" agregada satisfactoriamente!";
      //$scope.message = "Usuario agregado satisfactoriamente."
      $scope.areas = data.data;
      /*$scope.users.push($scope.newUser);*/
      /*$scope.newArea.area_conocimiento = null;*/
      $scope.newArea = {};
    },
    function(err){
      console.log(err);
      $scope.message_error = err.data.errors;
      $scope.message = "";
      //alert("error");
    });
    }

    $scope.goCurso = function(area){
    console.log(area);

    $scope.editArea = area;
    $location.url('/showCurso/'+$scope.editArea.id);


    //alert(user);
    //$scope.editArea = area;
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
             //alert('llego aqui');
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
    })