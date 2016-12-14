(function () {
    'use strict';

    angular
        .module('home.mir')
        .controller('MIRDefinitionProblemController', MIRDefinitionProblemController);

    function MIRDefinitionProblemController($state, $mdDialog, $localStorage, $timeout, DialogService, RestService, Constants, ValidationService) {
        /* jshint validthis: true */
        var scope = this;
        var local = $localStorage.globals;
        
        scope.phase = "Definición  del problema";
    }
})();