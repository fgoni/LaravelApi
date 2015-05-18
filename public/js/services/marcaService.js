/**
 * Created by Usuario on 17/05/2015.
 */
angular.module('marcaService', [])

    .factory('Marca', function ($http) {

        return {
            get: function () {
                return $http.get('api/marcas');
            },

            save: function (data) {
                return $http({
                    method: 'POST',
                    url: 'api/marcas',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(data)
                });
            },

            destroy: function (id) {
                return $http.delete('api/marcas/' + id);
            }
        }

    });
