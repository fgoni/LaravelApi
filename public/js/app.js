/**
 * Created by Usuario on 17/05/2015.
 */
// public/js/app.js


var app = angular.module('laravelApiApp', [
    'marcaController',
    'personajeController',
    'programaController',
    'marcaService',
    'programaService',
    'personajeService',
    'mainController',
    'mainService',
    'loginController',
    'ngRoute'
]);

app.config(function($routeProvider){
        
  $routeProvider
  .when('/',{ 
//     templateUrl:'js/partials/main.html',
     controller: 'MainController'
  }).when('/login',{ 
     templateUrl:'js/partials/login.html',
     controller: 'loginController'
  }).when('/marcas',{ 
     templateUrl:'js/partials/marcas.html',
     controller: 'marcaController'
  });
});