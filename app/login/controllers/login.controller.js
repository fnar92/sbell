(function () { 
    'use strict';
	
    angular
	.module('app.authentication')
	.controller('LoginController', LoginController);
    
    function LoginController ($location, $state, $mdDialog, RestService, AuthenticationService, Constants) {
        /* jshint validthis: true */
        console.log('init login');
        var scope = this;       
        
        AuthenticationService.isAuth;
        if(AuthenticationService.Auth===true){
            window.location.href="#/";
        }
        
        scope.login = login;
        
        function login() {
            scope.dataLoading = true;
            var objParams = {"username":scope.username, "password":scope.password };
            console.log(objParams);
            var url = Constants.BaseURLBack + '/login';
            
            RestService.post(url,'',objParams)
            .then(function(response) {
                if(response.status===200){
                    
                    if(response.data.status!==200){
                        scope.error = 'El usuario y/o contraseña son incorrectos, favor de verificar los datos.';
                        scope.dataLoading = false;
                        return;
                    }
                    
                    var data=response.data.userdata;
                    
                    console.log(response.data);
                    
                    AuthenticationService.SetCredentials(
                        data.id, 
                        scope.username,
                        scope.password,
                        data.rol, 
                        data.user_type
                    );
                    //AuthenticationService.isAuth();
                    window.location.reload();
                    //$state.go('/home', {}, {reload: true});    
                    /*var total = data.headers('perfiles').split(",");
                    var patt = /1/;
                    if(patt.test(total.length)){ //one rol
                        $state.go('home.configuration-ur');
                    }else{
                        showProfile();
                    }*/
                }
            })
            .catch(function(err){
                scope.error = 'El usuario y/o contraseña son incorrectos, favor de verificar los datos.';
                scope.dataLoading = false;
                setTimeout(function(){
                    scope.error=false;
                }, 500);
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