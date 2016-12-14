(function () {
    'use strict';

    angular
        .module('home.mir')
        .controller('MIRProbTreeController', MIRProbTreeController);

    function MIRProbTreeController($state, $mdDialog, $localStorage, $timeout, DialogService, RestService, Constants, ValidationService) {
        /* jshint validthis: true */
        var scope = this;
        var local = $localStorage.globals;
        //scope.phase = local.phase;
        scope.phase = "Árbol del problema";
        
    }
})();