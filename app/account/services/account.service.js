(function () { 
    'use strict';
	
    angular
        .module('app.home')
        .factory('AccountService', AccountService);

    function AccountService($http, $localStorage, Base64Service) {
        var service = {};
     
        
        return service;
       
    }

})();
