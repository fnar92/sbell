(function () { 
    'use strict';
	
    angular
        .module('app.home')	
        .controller('BreadcrumbController',BreadcrumbController);
	
        function BreadcrumbController ($localStorage, $state) {
            /* jshint validthis: true */
            var scope = this;
            var local = $localStorage.globals;
            scope.phase = local.phase;
            scope.home = changeHome;
            
            function changeHome() {
                local._noLoadUR = false; // carga o no de UR, cuando no mande nada por handleBroadcast
                $state.go('home.configuration-ur', {}, {reload: true});
            }
        }
})();