(function () { 
    'use strict';
	
    angular
	.module('home.budget-program')
	.controller('BudgetProgramPhasesController',BudgetProgramPhasesController);

	function BudgetProgramPhasesController(Constants, RestService,$state){
            /* jshint validthis: true */
            var scope = this; 
             
            loadPhases();
            scope.sendDiagnostic = sendDiagnostic;
            scope.sendMIR = sendMIR;
            scope.sendProyect = sendProyect;
            scope.sendTracing = sendTracing;

            function loadPhases(){
                var url = Constants.BaseURLFront+'/dummyJson/listPhasesPP.json';
                RestService.post(url,'','')
                .then(function(data) {   
                    var local = data.data;     
                    for (var prop in local) {
                        if(local[prop].phase === "Diagnostico"){
                            scope.showDiag = local[prop].isOpen;
                        }else if(local[prop].phase === "MIR"){
                            scope.showMIR = local[prop].isOpen;
                        }else if(local[prop].phase === "Proyectos"){
                            scope.showProyect = local[prop].isOpen;
                        }else if(local[prop].phase === "Seguimiento"){
                            scope.showTracing = local[prop].isOpen;
                        }
                        scope.phase = local[prop].globalStage;
                    }
                })
                .catch(function(err){
                    console.log("error al cargar json");
                });
            }
            function sendDiagnostic(){
                $state.go('home.diagnostic', {}, {reload: true});
                console.log("aqui showDiagnostic");
            }
            function sendMIR(){
                $state.go('home.mir.definition-problem', {}, {reload: true});
                console.log("aqui showMIR");
            }
            function sendProyect(){
                console.log("aqui showProyect");
            }
            function sendTracing(){
                console.log("aqui showTracing");
            }
	}
        
	
})();