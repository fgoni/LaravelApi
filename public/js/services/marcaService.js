/**
 * Created by Usuario on 17/05/2015.
 */
angular.module('marcaService', [])

    .factory('Marca', function ($http, $localStorage) {

        return {
            get: function () {
                return $http.get('api/marcas?access_token='+$localStorage.token);
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
