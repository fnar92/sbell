(function () { 
    'use strict';
	
    angular
        .module('app.authentication')
        .factory('AuthenticationService', AuthenticationService );

    function AuthenticationService($http, $localStorage, Base64Service) {
        var service = {};
     
        service.SetCredentials = setCredential;
        service.ClearCredentials = clearCredential;
        service.isAuth=isAuth;
        service.Auth=false;
        return service;
       
        
        function setCredential(id, username, password, rols, type) {
            var authdata = Base64Service.encode(username + ':' + password);
            $localStorage.$default({
                globals:{
                    id: id,
                    username: username,
                    authdata: authdata,
                    role: rols,
                    type: type                    
                }                       
            });
            $http.defaults.headers.common['Authorization'] = 'Basic ' + authdata;
        }

        function clearCredential() {
            $localStorage.$reset();
            $http.defaults.headers.common.Authorization = 'Basic ';            
        }
        
        function isAuth() {
            console.log('check session');
           if($localStorage.globals!==undefined){
               service.Auth=true;
               return true;
           }else{
               service.Auth=false;
               return false;
           }
        }
    }

})();
