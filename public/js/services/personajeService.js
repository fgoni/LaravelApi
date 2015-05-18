/**
 * Created by Usuario on 17/05/2015.
 */
angular.module('personajeService', [])

    .factory('Personaje', function ($http) {

        return {
            get: function () {
                return $http.get('api/personajes');
            },

            save: function (data) {
                return $http({
                    method: 'POST',
                    url: 'api/personajes',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            destroy: function (id) {
                return $http.delete('api/personajes/' + id);
            }
        }

    });