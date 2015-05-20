/**
 * Created by Usuario on 17/05/2015.
 */
// public/js/controllers/mainCtrl.js

angular.module('loginController', ['ngStorage'])

// inject the Comment service into our controller
        .controller('loginController', function ($scope, $rootScope, $localStorage, $sessionStorage, $location, mainFactory) {
            $rootScope.htmlClass = "login-content";
            $rootScope.bodyClass = "login-content sw-toggled";
            $scope.formData = {};
            
            $scope.login = function () {
                console.log("User: "+$scope.formData.user+" Pass: "+$scope.formData.pass);
                mainFactory.auth($scope.formData.user, $scope.formData.pass)
                        .success(function (data) {
                            console.log("success " + data);
                            $localStorage.token = data.access_token;
                            $location.path('/');
                        })
                        .error(function (data) {
                            console.log("error " + data);
                        });


                console.log($localStorage.token);
            }

            //$scope.login();
        });