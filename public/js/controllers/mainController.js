/**
 * Created by Usuario on 17/05/2015.
 */
// public/js/controllers/mainCtrl.js

angular.module('mainController', ['ngStorage'])

// inject the Comment service into our controller
    .controller('MainController', function($scope, $http,$localStorage,$sessionStorage,$location,mainFactory) {
      if($localStorage.token!=undefined){
            $location.path('/marcas');
        }else{
            $location.path('/login');
        }

    });