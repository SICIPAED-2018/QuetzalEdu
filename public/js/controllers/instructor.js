alert('este es mi controlador de AngulaJS');

var app = angular.module('myApp', ['ngRoute','angular-loading-bar']);

app.config(['cfpLoadingBarProvider', function(cfpLoadingBarProvider) {
    cfpLoadingBarProvider.includeSpinner = false;
    }]);

app.config(function($routeProvider) {
  $routeProvider
  .when('/', {
    templateUrl : 'inicio',
  })
  .otherwise({redirectTo: '/'});
});