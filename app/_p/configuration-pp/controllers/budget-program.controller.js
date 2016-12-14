(function () { 
    'use strict';
	
    angular
	.module('home.configuration-ur')
	.controller('BudgetProgramController',BudgetProgramController);

	function BudgetProgramController($localStorage, RestService, Constants, $state){
            /* jshint validthis: true */
            var scope = this; 
            var local = $localStorage.globals;
            
            scope.showPP = sendPP;
            loadPP();
            
            function sendPP(id, description, clave, objective){
                local.userPP = {id:id,description: description, clave:clave, objective:objective};
                $state.go('home.budget-program', {}, {reload: true});
            }
            
            function loadPP(){
                var data = 'anio='+local.userYear+'&idUnidadResponsable='+local.userUR.idUnidadResponsable;
                var url = Constants.BaseURLBack + '/programapresupuestal/uranio?'+data;
                RestService.get(url,'','')
                .then(function(data) { 
                    scope.pp = data.data;
                })
                .catch(function(err){
                    console.log("error al cargar json Programa Presupuestal");
                });
            }

	}
	
})();