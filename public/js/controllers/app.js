var app = angular.module('myApp', ['ngRoute','angular-loading-bar']);

app.config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
    cfpLoadingBarProvider.includeSpinner = false;
    }]);

app.config(function($routeProvider) {
  $routeProvider
  .when('/', {
    templateUrl : 'inicio',
  })
  .when('/users', {
    templateUrl : 'users',
    controller  : 'UsersController'
  })
  .when('/areas', {
    templateUrl : 'areas',
    controller  : 'AreasController'
  })
  .when('/preguntas', {
    templateUrl : 'preguntas',
    controller  : 'SimuladorController'
  })
  .when('/preguntas/create', {
    templateUrl : 'preguntas/create',
    controller  : 'SimuladorController'
  })
  .otherwise({redirectTo: '/'});

});

app.controller("UsersController",function($scope, $http){
  //$scope.mostrarCargando = true;

  /* filtro x primera letra */
  $scope.startsWith =function(actual, expected) {
    var lowerStr = (actual + "").toLowerCase();
    return lowerStr.indexOf(expected.toLowerCase()) === 0;
  };

  console.log("UsersController");
  $scope.users = [];
  $scope.newUser = [];
  $scope.editUser = [];
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
             // alert('llego aqui');
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


/********************AreasController********************/

/* falta agregar files js */

app.controller("AreasController",function($scope, $http){
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

    /*************************SimuladorController***************************/

    app.controller("SimuladorController",function($scope, $http, $location){

      /* filtro x primera letra */
      $scope.startsWith =function(actual, expected) {
        var lowerStr = (actual + "").toLowerCase();
        return lowerStr.indexOf(expected.toLowerCase()) === 0;
      };
      console.log("SimuladorController");
      $scope.preguntas = [];
      $scope.newPregunta = [];
      $scope.editPregunta = [];
      $scope.message = "";
      $scope.message_error = "";

      $http.get("http://localhost:8000/getPreguntas")
        .then(function(data){
          console.log(data);
          $scope.preguntas = data.data;
          //$scope.mostrarCargando = false;
        },
        function(err){
          console.log(err);
          //alert("error");
        });


      $scope.setPregunta = function(){
        $http.post("http://localhost:8000/setPreguntas",{
          pregunta: $scope.newPregunta.pregunta,
          respuesta: $scope.newPregunta.respuesta,
          /*email: $scope.newUser.email,
          password: $scope.newUser.password*/
        })
        .then(function(data,status,headers,config){
          //console.log($scope.newUser);
          console.log(data);
          $scope.message = "¡Pregunta agregada satisfactoriamente!";
          //$scope.message = "Usuario agregado satisfactoriamente."
          $scope.preguntas = data.data;
          /*$scope.users.push($scope.newUser);*/
          $scope.newPregunta = {};

          $location.path("/preguntas");
          
        },
        function(err){
          console.log(err);
          $scope.message_error = err.data.errors;
          $scope.message = "";
          //alert("error");
        });
      }


      $scope.selectPregunta = function(pregunta){
        console.log(pregunta);
        //alert(user);
        $scope.editPregunta = pregunta;
        //$scope.users.push($scope.newUser);
        //$scope.users.splice($scope.user);
        //$scope.users.splice($user, 1);
      }


      $scope.deletePregunta = function(dato){
        $http.delete("http://localhost:8000/deletePreguntas/"+dato)
        .then(function(data,status,headers,config){
                 // success callback
                 //alert('llego aqui');
                 //elimina en tiempo real
                 $scope.preguntas.splice($scope.preguntas.indexOf($scope.editPregunta), 1);
                 console.log(data);
                 $scope.message = "¡Pregunta eliminada satisfactoriamente!";
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

    //Directiva file-model
    .directive('fileModel', function($parse){
      return {
        restrict: 'A', //Restricción si coincide con el nombre del atributo
        link: function(scope, element, attrs) {
          var model = $parse(attrs.fileModel);
          var modelSetter = model.assign;
          element.bind('change', function(){
            scope.$apply(function(){
              modelSetter(scope, element[0].files[0]);
            });//apply
          });//bind
        }//link
      }//return
    });//directive

