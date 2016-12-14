(function () { 
    'use strict';
	
    angular
        .module('app.utils')
        .factory('SharedService', SharedService);

    function SharedService($rootScope) {
        
        var sharedService = {};
    
        sharedService.message = '';

        sharedService.prepForBroadcast = function(msg) {
            this.message = msg;
            this.broadcastItem();
        };

        sharedService.broadcastItem = function() {
            $rootScope.$broadcast('handleBroadcast');
        };
        
        return sharedService;

    }

})();
