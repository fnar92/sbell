(function () { 
    'use strict';
	
    angular
	.module('app.authentication')
	.controller('LoginController', LoginController);
    
    function LoginController ($location, $state, $mdToast, $mdDialog, RestService, AuthenticationService, Constants) {
        /* jshint validthis: true */
        console.log('init login');
        var scope = this;       
        
        AuthenticationService.isAuth;
        if(AuthenticationService.Auth===true){
            window.location.href="#/";
        }
        
        scope.login = login;
        scope.registrar = registrar;
        scope.signup = signup;
        
        scope.userdata={};

        
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
        
        function registrar() {
            window.location.href='#/register';
        }   
        
        function signup() {
            console.log(scope.userdata);
            var data=scope.userdata;
            if(data.password!==data.passwordr){
                warning('Las contraseñas no coinciden!');
                return;
            }
            
            var url = Constants.BaseURLBack + '/register';
            var keys={
                username: data.username,
                email: data.email,
                password: data.password
            };
            console.log(keys);
            RestService.post(url,'',keys)
            .then(function(response) {
                if(response.status===200){
                    
                    if(response.data.status!==200){
                        scope.error = 'Ocurrio un error en el registro, intente mas tarde.';
                        scope.dataLoading = false;
                        return;
                    }
                    
                }
            })
            .catch(function(err){
                scope.error = 'Ocurrio un error en el registro, intente mas tarde.';
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