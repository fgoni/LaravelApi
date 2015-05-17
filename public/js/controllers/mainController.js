/**
 * Created by Usuario on 17/05/2015.
 */
// public/js/controllers/mainCtrl.js

angular.module('mainCtrl', [])

// inject the Comment service into our controller
    .controller('mainController', function($scope, $http, Marca) {
        // object to hold all the data for the new comment form
        $scope.commentData = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the comments first and bind it to the $scope.comments object
        // use the function we created in our service
        // GET ALL COMMENTS ==============
        Marca.get()
            .success(function(data) {
                $scope.marcas = data;
                $scope.loading = false;
            });

        // function to handle submitting the form
        // SAVE A COMMENT ================
        $scope.submitMarca = function() {
            $scope.loading = true;

            // save the comment. pass in comment data from the form
            // use the function we created in our service
            Marca.save($scope.marcaData)
                .success(function(data) {

                    // if successful, we'll need to refresh the comment list
                    Marca.get()
                        .success(function(getData) {
                            $scope.marcas = getData;
                            $scope.loading = false;
                        });

                })
                .error(function(data) {
                    console.log(data);
                });
        };

        // function to handle deleting a comment
        // DELETE A COMMENT ====================================================
        $scope.deleteMarca = function(id) {
            $scope.loading = true;

            // use the function we created in our service
            Marca.destroy(id)
                .success(function(data) {

                    // if successful, we'll need to refresh the comment list
                    Marca.get()
                        .success(function(getData) {
                            $scope.marcas = getData;
                            $scope.loading = false;
                        });

                });
        };

    });