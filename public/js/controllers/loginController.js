/**
 * Created by Usuario on 17/05/2015.
 */
// public/js/controllers/mainCtrl.js

angular.module('loginController', ['ngStorage'])

// inject the Comment service into our controller
        .controller('loginController', function ($scope, $localStorage, $sessionStorage, $location, mainFactory) {


            $scope.login = function () {
                mainFactory.auth("martin", "123")
                        .success(function (data) {
                            console.log("success "+data);
                            $localStorage.token=data.access_token;
                            $location.path('/');                    
                        })
                        .error(function (data) {
                            console.log("error "+data);
                        });


                console.log($localStorage.token);
            }

            $scope.login();
        });