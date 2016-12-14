(function () { 
    'use strict';
	
    angular
        .module('app.home')	
        .controller('SelectPerfilController',SelectPerfilController);
	
        function SelectPerfilController ($mdDialog, $state, $localStorage, RestService, Constants) {
            /* jshint validthis: true */
            var scope = this;
            var local = $localStorage.globals;
            scope.perfil=null;
            scope.perfils = local.role.split(',');
            scope.answer = sendProfile;

            function sendProfile() {
                $mdDialog.hide();
                local.userProfile=scope.perfil; // add profile
                $state.go('home.configuration-ur');

                var url = Constants.BaseURLBack + '/usuarios/sesion/perfil'; 
                var objParams = {"perfil":scope.perfil}; 
                RestService.post(url,'',objParams)
                .then(function(data) {
                    
                })
                .catch(function(err){
                    console.log("error al enviar perfil");
                });                 
            }            
        }
})();