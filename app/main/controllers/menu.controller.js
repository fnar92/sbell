(function () { 
    'use strict';
    
    angular
        .module('app.home')	
        .controller('TopMenuController',TopMenuController);
	
        function TopMenuController ($mdDialog, $state, $localStorage, $log, $mdSidenav, RestService, Constants, DialogService, ValidationService, SharedService) {
            /* jshint validthis: true */
            var scope = this;
            var local = $localStorage.globals;
            var dataValidation = ValidationService.mainMenu();

            /* binding user */
            scope.name = local.name;
            scope.profiles = local.role.split(','); 
            scope.userProfile = (scope.profiles[1])? local.userProfile : local.role;
            scope.profile = scope.userProfile;
            /* binding button information */
            scope.btnStarDate = local.userStarDate;
            scope.btnEndDate = local.userEndDate;
            scope.btnUR = dataValidation['existUR'] ? local.userUR.description:"N/A";
            scope.btnPP = dataValidation['existPP'] ? local.userPP.description:"N/A";                       
            /* validaions */
            scope.btnProfiles = dataValidation['btnProfiles'];
            scope.isAdmin = dataValidation['isAdmin'];
            scope.exDates = dataValidation['existDate'];
            scope.exUR = dataValidation['existUR'];
            scope.exPP = dataValidation['existPP'];
            /* END validaions */

            scope.outSession = session;
            scope.changeProfile = changeProfile;
            scope.changeYear = changeYear; 
            scope.toggleRight = buildToggler('right');
            loadYear((local.userYear) ? true: false);

            function session(ev) {
                var quest= '¿Seguro deseas salir del sistema?';
                var confirm = DialogService.dialogConfirm(ev,'Confirmacion', quest,'Si','No');
                $mdDialog.show(confirm).then(function() {
                    RestService.get(Constants.BaseURLBack + '/logout','','');           
                    $state.go('login');
                }, function() {
                    $mdDialog.hide();
                });                 
            }

            function changeProfile(ev) {
                var quest= '¿Seguro quieres cambiar de perfil?';
                var confirm = DialogService.dialogConfirm(ev,'Confirmacion',quest,'Si','No');
                $mdDialog.show(confirm).then(function() {  
                    local.userYear = null;
                    local.actYear = null;
                    local.userProfile = scope.profile;
                    local._noLoadUR = false;// carga o no de UR, cuando no mande nada por handleBroadcast
                    if($state.is("home.configuration-ur")){
                        $state.reload();
                    }else{
                        $state.go('home.configuration-ur', {}, {reload: true});
                    }
                    sendProfile();                   
                }, function() {
                    $mdDialog.hide();
                });                   
            }
            
            function sendProfile(){
                var url = Constants.BaseURLBack + '/usuarios/sesion/perfil';
                var objParams = {"perfil":scope.profile}; 
                RestService.post(url,'',objParams)
                .then(function(data) {
                    
                })
                .catch(function(err){
                    console.log("error al enviar perfil");
                });
            }
            
            function changeYear(ev) {
                var quest= '¿Seguro deseas cambiar de año?';
                var confirm = DialogService.dialogConfirm(ev,'Confirmación', quest,'Si','No');
                $mdDialog.show(confirm).then(function() {
                    local.userYear = scope.selectedYear;
                    if($state.is("home.configuration-ur")){
                        $state.reload();
                    }else{
                        $state.go('home.configuration-ur', {}, {reload: true});
                    }
                    local._noLoadUR = false; // carga o no de UR, cuando no mande nada por handleBroadcast
                    local.userUR = null;
                    local.userPP = null;
                }, function() {
                    $mdDialog.cancel();
                });                     
            }
            
            function loadYear(exist){
                var url = Constants.BaseURLBack+'/usuarios/anios';
                RestService.get(url,'','')
                .then(function(data) {  
                    scope.dataur = data.data;
                    if(exist){
                        scope.selectedYear = String(local.userYear);
                    }else{
                        for (var prop in scope.dataur) {
                            if (scope.dataur[prop].apertura) { 
                                scope.selectedYear= String(scope.dataur[prop].descripcion);
                                local.actYear = scope.selectedYear;
                                break;
                            }else{
                                scope.selectedYear= String(scope.dataur[0].descripcion); // coloco el primer año en false como actual navegable en front
                                local.actYear = scope.selectedYear;
                                break;
                            }
                        }
                    }
                    local.userYear = scope.selectedYear;
                    SharedService.prepForBroadcast(scope.selectedYear);// envio el año, para ser consumido por otro controlador                   
                })
                .catch(function(err){
                    console.log("error al cargar json");
                });
            }
            
            function buildToggler(navID) {
                return function() {
                  // Component lookup should always be available since we are not using `ng-if`
                  $mdSidenav(navID)
                    .toggle()
                    .then(function () {
                        $log.debug("toggle " + navID + " is done");
                    });
                }
            }
            
        }
})();