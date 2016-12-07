(function () { 
    'use strict';
	
    angular
        .module('app.authentication')
        .factory('AuthenticationService', AuthenticationService );

    function AuthenticationService($http, $localStorage, Base64Service) {
        var service = {};
     
        service.SetCredentials = setCredential;
        service.ClearCredentials = clearCredential;
        
        return service;
       
        function setCredential(username, password, rols, name) {
            var authdata = Base64Service.encode(username + ':' + password);
            $localStorage.$default({
                globals:{
                    username: username,
                    authdata: authdata,
                    role: rols,
                    name: name
                }                       
            });
            $http.defaults.headers.common['Authorization'] = 'Basic ' + authdata;
        }

        function clearCredential() {
            $localStorage.$reset();
            $http.defaults.headers.common.Authorization = 'Basic ';            
        }
    }

})();
