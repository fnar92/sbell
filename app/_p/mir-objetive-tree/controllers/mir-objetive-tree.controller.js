(function () {
    'use strict';

    angular
        .module('home.mir')
        .controller('MIRObjTreeController', MIRObjTreeController);

    function MIRObjTreeController($state, $mdDialog, $localStorage, $timeout, DialogService, RestService, Constants, ValidationService) {
        /* jshint validthis: true */
        var scope = this;
        var local = $localStorage.globals;
        //scope.phase = local.phase;
        scope.phase = "Árbol del objetivo";
    }
})();