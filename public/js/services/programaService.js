/**
 * Created by Usuario on 17/05/2015.
 */
angular.module('programaService', [])

    .factory('Programa', function ($http) {

        return {
            get: function () {
                return $http.get('api/programas');
            },

            save: function (data) {
                return $http({
                    method: 'POST',
                    url: 'api/programas',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            destroy: function (id) {
                return $http.delete('api/programas/' + id);
            }
        }

    });