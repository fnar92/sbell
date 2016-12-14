(function () {
    'use strict';

    angular
            .module('home.configuration-ur')
            .controller('CreateBudgetProgramController', CreateBudgetProgramController);

    function CreateBudgetProgramController($localStorage, $mdDialog, $state, DialogService, Constants, RestService, $timeout) {
        /* jshint validthis: true */
        var scope = this;
        var local = $localStorage.globals;
        scope.showDetailSearchBudgetProgram=showDetailSearchBudgetProgram;

        function showDetailSearchBudgetProgram(titulo, id) {
            var data = {
                uno: titulo,
                dos: id
            };
            var confirm = DialogService.dialogTpl(scope, data, 'app/configuration-pp/views/search-budget-program.tpl.html', detailSearchBudgetProgramController);
            $mdDialog.show(confirm).then(function (answer) {
                console.log("answer: ");
                console.dir(answer);
                

                if (answer) {
                    console.log(" si answer: " + answer);                    

                } else {
                    console.log(" no answer: " + answer);
                }

            }, function () {
                console.log('Error en showDetailSearchBudgetProgram');
            });
        }
        
        function detailSearchBudgetProgramController(scope, data) {
            scope.cancelar = function () {
                $mdDialog.cancel();
            };
            
            $mdDialog.hide(data);
            
            scope.submitted = function (form) {
                
            }
        }
    }

})();