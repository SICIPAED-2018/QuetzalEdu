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
  .when('/showContenido/:contenidoId', {
    templateUrl : 'showContenido/contenidoId',
    controller  : 'ContenidoController'
  })
  .when('/getContenido/:contenidoId', {
    templateUrl : 'getContenido/contenidoId',
    controller  : 'ContenidoController'
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
    },
    function(err){
      console.log(err);
    });

    $scope.goCurso = function(area){
    console.log(area);
    $scope.editArea = area;
    $location.url('/showCurso/'+$scope.editArea.id);
  }

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

    $scope.goContenido = function(contenido){
    console.log(contenido);
    //$scope.editArea = area;
    $location.url('/showContenido/'+contenido.id);

  }

    $scope.clearMessage = function(){
      $scope.message = "";
      $scope.message_error = "";
    };
    })


/********************ContenidoController********************/

/* falta agregar files js */

app.controller("ContenidoController",function($scope, $http, $routeParams, $location){
  //$scope.mostrarCargando = true;
  console.log("ContenidoController");
  $scope.contenido = [];
  $scope.newArea = [];
  $scope.editArea = [];
  $scope.message = "";
  $scope.message_error = "";

  $http.get("http://localhost:8000/getContenido/"+$routeParams.contenidoId)
    .then(function(data){
      console.log(data);
      $scope.contenido = data.data;
      //$scope.mostrarCargando = false;
    },
    function(err){
      console.log(err);
      //alert("error");
    });

    $scope.goCurso = function(area){
    console.log(area);
    $scope.editArea = area;
    $location.url('/showCurso/'+$scope.editArea.id);

  }

    $scope.clearMessage = function(){
      $scope.message = "";
      $scope.message_error = "";
    };
    })