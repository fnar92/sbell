(function () {
    'use strict';

    angular
        .module('home.configuration-ur')
        .controller('DataURController', DataURController);

    function DataURController($scope, $state, $mdDialog, $localStorage, $timeout, DialogService, RestService, Constants, ValidationService, SharedService) {
        /* jshint validthis: true */
        var scope = this;
        var local = $localStorage.globals;
        var dataValidation = ValidationService.mainMenu();

        scope.isRol = dataValidation['isAdmin'];

        scope.showMessage = false; // para mostrar mensaje
        scope.doFade = false; // para mostrar mensaje  
        scope.showSectionView = (scope.isRol) ? 'columnListUR' : 'columnListOnlyUR';

        scope.dates={};
        scope.seeUR = seeUR;
        scope.showDates = showDates;       
        scope.goBudgetScheduleSetting = goBudgetScheduleSetting;
        scope.openNextYear = openNextYear;
        
        $scope.$on('handleBroadcast', function() {  
            scope.nextYear = parseInt(SharedService.message) + 1;
            local._noLoadUR = true; // carga o no de UR, cuando no mande nada por handleBroadcast
            loadUR(SharedService.message);
        });
        
        if(local._noLoadUR) loadUR(local.userYear); // cargar UR, cuando no mande nada por handleBroadcast

        function loadUR(year) {
            var url = Constants.BaseURLBack + '/unidadresponsable/anio/'+year;
            RestService.get(url, '', '')
            .then(function (data) {
                if (scope.isRol) { // es administrador
                    scope.dataur = data.data;
                } else {
                    var obj = data.data;
                    var objNew = {};
                    for (var prop in obj) {
                        if (obj[prop].solicitudProgramaPresupuestario) { // solo true, asi avanza a las bolsitas
                            var a = {"idUnidadResponsable": obj[prop].idUnidadResponsable, "clave": obj[prop].clave, "descripcion": obj[prop].descripcion, "solicitudProgramaPresupuestario": obj[prop].solicitudProgramaPresupuestario};
                            objNew[prop] = a;
                        }
                    }
                    scope.dataur = objNew;
                }
            })
            .catch(function (err) {
                console.log("error al cargar json loadUR");
            });
            if (scope.isRol)
            checkBtns(year); // solo se carga en la pagina del rol Planeacion
        }

        function showDates(id, ev) {
            var title = "";
            switch (id) {
                case 1:
                    title = "Formulación del Programa de Trabajo Anual";
                    break;
                case 2:
                    title = "Programa de Trabajo Anual Ajustado";
                    break;
                case 3:
                    title = "Afectación Programática Presupuestal";
                    break;
            }

            var data = [{id: id}, {title: title}, {year: scope.nextYear}];
            var confirm = DialogService.dialogTpl(scope, data, 'app/tools/select-dates/views/select-dates.tpl.html', datesController);
            $mdDialog.show(confirm).then(function (answer) {
                // para mostrar mensaje
                scope.doFade = false;
                scope.showMessage = true;
                scope.message = answer.message;
                scope.statusType = answer.status;
                if(scope.statusType) scope.visibleNextFormulation = true; // escondo boton Abrir Formulacion en front

                $timeout(function(){
                    scope.doFade = true;
                    $state.reload();
                }, 2500);
                // para mostrar mensaje
            }, function () {
                $mdDialog.hide();
            });         
        }

        function openNextYear(ev) {
            var quest= '¿Seguro desea abrir el año '+scope.nextYear+'?';
            var confirm = DialogService.dialogConfirm(ev,'Confirmación', quest,'Si','No');
            $mdDialog.show(confirm).then(function() {
                var url = Constants.BaseURLBack + '/anio';
                RestService.post(url,'','')
                .then(function(data) {
                    local.userYear = scope.nextYear;
                    local.actYear = local.userYear;
                    scope.visibleNextYear = true;
                    local._noLoadUR = false; // carga o no de UR, cuando no mande nada por handleBroadcast
                    $state.reload();
                })
                .catch(function(err){
                    console.log("Error al abrir el siguiente año");
                });
                    
            }, function() {
                $mdDialog.hide();
            });                 
        }
        
        function seeUR(ind, idUnidadResponsable, clave, description) {
            local.userUR = {id: clave, idUnidadResponsable: idUnidadResponsable, description: description};
            if (scope.isRol) {// es administrador
                var obj = scope.dataur;
                if (obj[ind].solicitudProgramaPresupuestario) { // Lista los PP --> true  
                    $state.go('home.list-budget-program', {}, {reload: true});
                } else {
                    $state.go('home.create-budget-program', {}, {reload: true}); // Crear los PP --> false  
                }
            } else {
                $state.go('home.list-budget-program', {}, {reload: true});
            }
        }

        function goBudgetScheduleSetting() {          
            $state.go('home.budget-schedule-setting', {}, {reload: true});
        }
        
        function checkBtns(year){
            var url = Constants.BaseURLBack+'/anio/iniciofase?anio='+year;
            RestService.get(url,'','')
            .then(function(data) {
                scope.visibleNextYear = (String(local.actYear) === year);
                scope.visibleNextFPTA = data.data.formulacion;
                scope.visibleNextAPP = data.data.afectacion;
                scope.visibleNextPTAA = data.data.ajuste;
            })
            .catch(function(err){
                console.log("error al cargar json checkBtns();");
            });
        }

        function datesController(scope, data) {
            scope.data = data;
            scope.actYear = parseInt(local.userYear);
            scope.cancel = function() {
              $mdDialog.cancel();
            };

            scope.sentDates = function(answer) {
                var objParams = {
                    "idEtapa" : scope.data[0].id,
                    "anio" : scope.actYear,
                    "fechaInicio" : scope.dates.startDate,
                    "fechaFin" : scope.dates.endDate
                };
                var url = Constants.BaseURLBack + '/apertura';
                RestService.post(url,'application/json',objParams)
                .then(function(data) {
                    answer = {status:true, message:"Se registro con exito el periodo solicitado"};
                    $mdDialog.hide(answer);
                })
                .catch(function(err){
                    answer = {status:false, message:"Error al registrar el periodo solicitado"};
                    $mdDialog.hide(answer);
                });
              
            };
            
        }
    }
})();