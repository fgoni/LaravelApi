/**
 * Created by Usuario on 17/05/2015.
 */
// public/js/controllers/mainCtrl.js

angular.module('marcaController', ['ngStorage'])

// inject the Comment service into our controller
        .controller('marcaController', function ($scope,$rootScope, $http, $localStorage, $sessionStorage, Marca, mainFactory) {
            $scope.template = {};
            $scope.template.header = "js/includes/header.html";
            $scope.template.sidebar = "js/includes/sidebar.html";
            $rootScope.htmlClass = "";
            $rootScope.bodyClass = "";
            
            // object to hold all the data for the new comment form
            $scope.marcaData = {};
            // loading variable to show the spinning loading icon
            $scope.loading = true;

            // get all the comments first and bind it to the $scope.comments object
            // use the function we created in our service
            // GET ALL COMMENTS ==============
            Marca.get()
                    .success(function (data) {
                        $scope.marcas = data;
                        $scope.loading = false;
                    });


            // function to handle submitting the form
            // SAVE A COMMENT ================
            $scope.submitMarca = function () {
                $scope.loading = true;

                // save the comment. pass in comment data from the form
                // use the function we created in our service
                Marca.save($scope.marcaData)
                        .success(function (data) {

                            // if successful, we'll need to refresh the comment list
                            Marca.get()
                                    .success(function (getData) {
                                        $scope.marcas = getData;
                                        $scope.loading = false;
                                    });

                        })
                        .error(function (data) {
                            console.log(data);
                        });
            };

            // function to handle deleting a comment
            // DELETE A COMMENT ====================================================
            $scope.deleteMarca = function (id, $event) {
                $event.preventDefault();
                $scope.loading = true;

                // use the function we created in our service
                Marca.destroy(id)
                        .success(function (data) {

                            // if successful, we'll need to refresh the comment list
                            Marca.get()
                                    .success(function (getData) {
                                        $scope.marcas = getData;
                                        $scope.loading = false;
                                    });

                        });
            };
            $scope.getTest = function(){
                mainFactory.logout();
            };
        });