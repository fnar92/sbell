(function () {
    'use strict';

    angular
        .module('app.home')
        .controller('AboutController', AboutController);

    function AboutController($scope, $localStorage, $mdSidenav, $log, $state, ValidationService, SharedService, Constants, RestService) {
        /* jshint validthis: true */
        var scope = this;
        var local = $localStorage.globals;
        var dataValidation = ValidationService.mainMenu();
        
        $scope.$on('handleBroadcast', function() {           
            scope.year = SharedService.message;
        });
        
        scope.exPP = dataValidation['existPP'];
            
        scope.phase = "";
        
        scope.year = local.userYear;
        scope.actYear = local.actYear;
        scope.mision = "Contribuir a la mejora de la calidad y equidad de la educación obligatoria, a través de su evaluación, la emisión de lineamientos y directrices de políticas.";
        scope.vision = "El instituto es el organismo rector de la evaluación en México que genera información y conocimiento relevante de la formulación de políticas de mejora del Sistema Educativo Nacional y se constituyen en el principal referente para los docentes, padres de familia, alumnos y sociedad en general.";
        
        scope.ur = local.urDefault.defaultUR;
        scope.ppName = ( scope.exPP )? local.userPP.clave+" - "+local.userPP.description:"N/A";
        scope.ppObj = ( scope.exPP )? local.userPP.objective: "N/A";
        
        scope.close = closeAbout;
        scope.change = onChange;
        strategyObj();
        
        function strategyObj(){
            var url = Constants.BaseURLFront+'/dummyJson/listObjectiveStrategyDummy.json';
            RestService.post(url,'','')
            .then(function(data) {
                scope.dataObjective = data.data;
//                console.log("AboutController scope.year", scope.year);
//                console.log("AboutController strategyObj: ", data.data);
            })
            .catch(function(err){
                console.log("error al cargar json");
            });
        }
        
        function onChange(){
//            console.log("valor strategyObj: ", scope.strategyObj);
            var url = Constants.BaseURLFront+'/dummyJson/listGoalsDummy.json';
            RestService.post(url,'','')
            .then(function(data) {
                scope.seeGoals = true;
                scope.dataGoals = data.data;
//                console.log("AboutController dataGoals: ", data.data);
            })
            .catch(function(err){
                console.log("error al cargar json");
            });
        }
        
        function closeAbout() {
            // Component lookup should always be available since we are not using `ng-if`
            $mdSidenav('right').close()
                .then(function () {
                  $log.debug("close RIGHT is done");
                });
        };
        
    }
})();