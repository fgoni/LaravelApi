/**
 * Created by Usuario on 18/05/2015.
 */
/**
 * Created by Usuario on 17/05/2015.
 */
// public/js/controllers/mainCtrl.js

angular.module('programaController', [])

// inject the Comment service into our controller
    .controller('programaController', function($scope, $http, Programa) {
        // object to hold all the data for the new comment form
        $scope.programaData = {};
        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the comments first and bind it to the $scope.comments object
        // use the function we created in our service
        // GET ALL COMMENTS ==============
        Programa.get()
            .success(function(data) {
                $scope.programas = data;
                $scope.loading = false;
            });

        // function to handle submitting the form
        // SAVE A COMMENT ================
        $scope.submitPrograma = function() {
            $scope.loading = true;

            // save the comment. pass in comment data from the form
            // use the function we created in our service
            Programa.save($scope.programaData)
                .success(function(data) {

                    // if successful, we'll need to refresh the comment list
                    Programa.get()
                        .success(function(getData) {
                            $scope.programas = getData;
                            $scope.loading = false;
                        });

                })
                .error(function(data) {
                    console.log(data);
                });
        };

        // function to handle deleting a comment
        // DELETE A COMMENT ====================================================
        $scope.deletePrograma = function(id) {
            $scope.loading = true;

            // use the function we created in our service
            Programa.destroy(id)
                .success(function(data) {

                    // if successful, we'll need to refresh the comment list
                    Programa.get()
                        .success(function(getData) {
                            $scope.programas = getData;
                            $scope.loading = false;
                        });

                });
        };

    });