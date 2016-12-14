(function () { 
    'use strict';
	
    angular
        .module('app.home')
        .factory('HomeService', HomeService);

    function HomeService($http, $localStorage, Base64Service) {
        var service = {};
     
        service.SetCredentials = setCredential;
        service.ClearCredentials = clearCredential;
        
        return service;
       
        function setCredential(username, password, rols, name, phase, urDefault) {
            var authdata = Base64Service.encode(username + ':' + password);
            $localStorage.$default({
                globals:{
                    username: username,
                    authdata: authdata,
                    role: rols,
                    name: name,
                    phase: phase,
                    urDefault: urDefault
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
