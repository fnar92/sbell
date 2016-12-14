(function () { 
    'use strict';
	
    angular
	.module('app.home')
	.controller('HomeController', HomeController);
    
    function HomeController ($state, $mdDialog, $mdToast, DialogService, RestService, AuthenticationService, Constants) {
        /* jshint validthis: true */
        console.log('init home');
        var scope = this;  
        scope.logout = logout;
        
        AuthenticationService.isAuth();
        scope.isAuth=AuthenticationService.Auth;
         /*$mdDialog.show({
                templateUrl: 'app/login/views/login.tpl.html',
                parent: angular.element(document.body),
                targetEvent: null,
                clickOutsideToClose:true,
                fullscreen: scope.customFullscreen
            });         
        */
       
       
            
    function logout(ev) {
        console.log('salir');
        var quest= '¿Seguro deseas salir del sistema?';
        var confirm = DialogService.dialogConfirm(ev,'Confirmacion', quest,'Si','No');
        $mdDialog.show(confirm).then(function() {
            RestService.get(Constants.BaseURLBack + '/logout','','');  
             AuthenticationService.ClearCredentials();
             window.location.reload();
            //$state.go('/home');
        }, function() {
            $mdDialog.hide();
        });      
    }
        
        /*
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
        }        */
    };

})();