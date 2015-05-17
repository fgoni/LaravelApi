// public/js/services/marcaService.js
/**
 * Created by Usuario on 17/05/2015.
 */
angular.module('marcaService', [])

    .factory('Marca', function($http) {

        return {
            // Get all Marcas
            get : function() {
                return $http.get('api/marcas');
            },

            // save a comment (pass in comment data)
            save : function(marcaData) {
                return $http({
                    method: 'POST',
                    url: 'api/marcas',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(marcaData)
                });
            },

            // destroy a comment
            destroy : function(id) {
                return $http.delete('api/marca/' + id);
            }
        }

    });
