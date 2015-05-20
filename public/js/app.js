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
    'ngRoute',
    'door3.css'
]);

app.config(function($routeProvider){
        
  $routeProvider
  .when('/',{ 
     templateUrl:'js/partials/main.html',
     controller: 'MainController'
  }).when('/login',{ 
     templateUrl:'js/partials/login.html',
     controller: 'loginController',
     css: [
         'vendors/sweet-alert/sweet-alert.min.css',
         'vendors/animate-css/animate.min.css',
         'vendors/material-icons/material-design-iconic-font.min.css',
         'vendors/socicon/socicon.min.css'
     ]
  }).when('/marcas',{ 
     templateUrl:'js/partials/marcas.html',
     controller: 'marcaController'
  });
});