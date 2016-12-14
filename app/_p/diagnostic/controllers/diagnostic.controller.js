(function () {
    'use strict';

    angular
        .module('home.diagnostic')
        .controller('DiagnosticController', DiagnosticController);

    function DiagnosticController($localStorage, $mdDialog, $timeout, textAngularManager, DialogService) {
        /* jshint validthis: true */
        var scope = this;
        var local = $localStorage.globals;
        
        scope.phase = "Diagnostico";
        scope.version = textAngularManager.getVersion();
        scope.disabled = false;
        scope.disabledFinish = true;
        
        scope.showMessage = false; // para mostrar mensaje
        scope.doFade = false; // para mostrar mensaje 
        
        scope.sendData = sendData;
        scope.finishDiagnostic = finishDiagnostic;
        
        function sendData(ev){
            var quest= '¿Desea guardar los cambios?';
            var confirm = DialogService.dialogConfirm(ev,'Confirmación', quest,'Si','No');
            $mdDialog.show(confirm).then(function() {
                console.log("envando datos: ",scope.htmlcontent);
                scope.disabledFinish = false;
                // para mostrar mensaje
                scope.doFade = false;
                scope.showMessage = true;
                scope.statusType = true;
                scope.message = 'Los datos se guardaron correctamente'; // esto se valida si se inserto bien o no, cambiara el mensaje, por ahora es true asta integrar con back
                
                $timeout(function(){
                    scope.doFade = true;
                    //$state.reload();
                }, 2500);
                // para mostrar mensaje
            }, function() {
                $mdDialog.hide();
            });
        }
        
        function finishDiagnostic(ev){
            var quest= 'Una vez terminado el Diagnóstico no se podrá seguir editandolo';
            var confirm = DialogService.dialogConfirm(ev,'¿Desea Terminar el Diagnóstico?', quest,'Si','No');
            $mdDialog.show(confirm).then(function() {
                scope.disabled = !scope.disabled;
                scope.disabledFinish = true; // deshabilito el boton de terminado, aqui va el valor del back para bloquear
                scope.disabledSave = true; // deshabilito el boton de guardado
                console.log("Se termino la conctruccion del diagnostico");
                
                // para mostrar mensaje
                scope.doFade = false;
                scope.showMessage = true;
                scope.statusType = true;
                scope.message = 'El Diagnostico se termino correctamente'; // esto se valida si se inserto bien o no, cambiara el mensaje, por ahora es true asta integrar con back
                
                $timeout(function(){
                    scope.doFade = true;
                    //$state.reload();
                }, 2500);
                // para mostrar mensaje
                
            }, function() {
                $mdDialog.hide();
            });
        }
    }
})();