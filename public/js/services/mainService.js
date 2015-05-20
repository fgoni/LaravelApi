/**
 * Created by Usuario on 17/05/2015.
 */
angular.module('mainService', [])

    .factory('mainFactory', function ($http, $localStorage, $location) {

        return {
            auth: function (username,password) {
                console.log("llego");
                return $http({
                    method: 'POST',
                    url: 'oauth/access_token',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: "grant_type=password&client_id=cliente1&client_secret=axb123AsDFs1Asdasdfasd&username="+username+"&password="+password                   
                });
            },
            logout: function(){
              console.log("logout");
              delete $localStorage.token;
              $location.path("/");
            }
        };

    });
