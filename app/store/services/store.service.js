(function () { 
    'use strict';
	
    angular
        .module('app.home')
        .factory('StoreService', StoreService);

    function StoreService($http, $localStorage, Base64Service) {
        var service = {};
     
        return service;
    }

})();
