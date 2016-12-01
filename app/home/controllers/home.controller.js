(function () { 
    'use strict';
	
    angular
	.module('app.authentication')
	.controller('LoginController', LoginController);
    
    function LoginController ($state, $mdDialog, RestService, AuthenticationService, Constants) {
        /* jshint validthis: true */
        var scope = this;       

        AuthenticationService.ClearCredentials();
        scope.login = login;
        
        function login() {
            scope.dataLoading = true;
            var objParams = {"username":scope.username, "password":scope.password };
            var url = Constants.BaseURLBack + '/login';
            
            RestService.post(url,'',objParams)
            .then(function(data) {
                if(data.status===200){
                    var urDefault = {"id":data.headers('idUnidadResponsable'), "defaultUR": data.headers('descripcionUR')};
                    AuthenticationService.SetCredentials(scope.username, scope.password, data.headers('perfiles'), data.headers('username'), data.headers('fase'), urDefault);
                    var total = data.headers('perfiles').split(",");
                    var patt = /1/;
                    if(patt.test(total.length)){ //one rol
                        $state.go('home.configuration-ur');
                    }else{
                        showProfile();
                    }
                }
            })
            .catch(function(err){
                scope.error = 'El usuario y/o contraseña son incorrectos, favor de verificar los datos.';
                scope.dataLoading = false;
            });
            
        }

        function showProfile(ev) {
            $mdDialog.show({
                templateUrl: 'app/tools/main/views/select-perfil.tpl.html',
                parent: angular.element(document.body),
                targetEvent: ev,
                clickOutsideToClose:false,
                fullscreen: scope.customFullscreen
            });           
        }        
    };

})();