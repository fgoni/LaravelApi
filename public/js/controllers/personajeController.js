/**
 * Created by Usuario on 18/05/2015.
 */
/**
 * Created by Usuario on 17/05/2015.
 */
// public/js/controllers/mainCtrl.js

angular.module('personajeController', [])

// inject the Comment service into our controller
    .controller('personajeController', function($scope, $http, Personaje) {
        // object to hold all the data for the new comment form
        $scope.personajeData = {};
        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the comments first and bind it to the $scope.comments object
        // use the function we created in our service
        // GET ALL COMMENTS ==============
        Personaje.get()
            .success(function(data) {
                $scope.personajes = data;
                $scope.loading = false;
            });

        // function to handle submitting the form
        // SAVE A COMMENT ================
        $scope.submitPersonaje = function() {
            $scope.loading = true;

            // save the comment. pass in comment data from the form
            // use the function we created in our service
            Personaje.save($scope.personajeData)
                .success(function(data) {

                    // if successful, we'll need to refresh the comment list
                    Personaje.get()
                        .success(function(getData) {
                            $scope.personajes = getData;
                            $scope.loading = false;
                        });

                })
                .error(function(data) {
                    console.log(data);
                });
        };

        // function to handle deleting a comment
        // DELETE A COMMENT ====================================================
        $scope.deletePersonaje = function(id) {
            $scope.loading = true;

            // use the function we created in our service
            Personaje.destroy(id)
                .success(function(data) {

                    // if successful, we'll need to refresh the comment list
                    Personaje.get()
                        .success(function(getData) {
                            $scope.personajes = getData;
                            $scope.loading = false;
                        });

                });
        };

    });