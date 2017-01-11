(function () { 
    'use strict';
	
    angular
        .module('app.authentication')
        .factory('UserService', UserService );

    function UserService($http, RestService, $localStorage, $rootScope, Base64Service, Constants) {
        var service = {};
        service.getUser=getUser;
        return service;
        
        function getUser(){
            console.log('buscando usuario');
            var id=$localStorage.globals.id;
            var type=$localStorage.globals.type;
            var url=Constants.BaseURLBack+'/user/getUser/'+id+'/'+type;
            RestService.get(url,'').then(function(response) {
                console.log('se obtuvo el usuario');
                $rootScope.user=response.data;
            })
            .catch(function(err){
                console.log('error al obtener usuario: '+JSON.stringify(err));
            });
        }
    }

})();
