(function () {     'use strict';	    angular	.module('app.home')	.controller('AccountController', AccountController);        function AccountController ($state, $mdDialog, $mdToast, AccountService, RestService, AuthenticationService, Constants) {        /* jshint validthis: true */        console.log('init account');        var scope = this;        AuthenticationService.isAuth;        if(AuthenticationService.Auth===false){            window.location.href="#/login";        }                                 /*$mdDialog.show({                templateUrl: 'app/login/views/login.tpl.html',                parent: angular.element(document.body),                targetEvent: null,                clickOutsideToClose:true,                fullscreen: scope.customFullscreen            });                 */                                              /*        function showProfile(ev) {            $mdDialog.show({                templateUrl: 'app/tools/main/views/select-perfil.tpl.html',                parent: angular.element(document.body),                targetEvent: ev,                clickOutsideToClose:false,                fullscreen: scope.customFullscreen            });                   }        */    };})();