(function () {
    'use strict';

    angular
        .module('home.mir')
        .controller('MIRTabsController', MIRTabsController);

    function MIRTabsController($state, $rootScope, $mdDialog, $localStorage, $timeout, DialogService, RestService, Constants, ValidationService) {
        /* jshint validthis: true */
        var scope = this;
        var local = $localStorage.globals;
        //scope.phase = local.phase;
        scope.phase = "MIR";
        scope.currentNavItem = 'definicion-problema';
    }
})();