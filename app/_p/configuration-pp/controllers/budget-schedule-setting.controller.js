(function () {
    'use strict';

    angular
            .module('home.configuration-ur')
            .controller('BudgetScheduleSettingController', BudgetScheduleSettingController);

    function BudgetScheduleSettingController($localStorage,$mdDialog, $state, DialogService, Constants, RestService, $timeout, DTOptionsBuilder, DTColumnBuilder, $scope, $compile, $http) {
        var scope = this;
        var local = $localStorage.globals;        
        var urlD = Constants.BaseURLBack + '/programapresupuestal/?anio=' + local.userYear;
        
        scope.showDetailBudgetProgram = showDetailBudgetProgram;
        scope.loadCatProgramBudget = loadCatProgramBudget;
        scope.showMessage = false; // para mostrar mensaje
        scope.doFade = false; //para mostrar mensaje
        scope.catProgramBudget = {};
        scope.datos = {};
        scope.idProgramaPresupuestado = 0;
        scope.message = '';
        scope.esCorrecto = false;
        scope.dtInstance = {};
        scope.persons = {};
        scope.dtOptions = DTOptionsBuilder.fromSource(urlD)
                .withPaginationType('full_numbers')
                .withOption('createdRow', createdRow);
        scope.dtColumns = [
            DTColumnBuilder.newColumn('clave').withTitle('Clave').withOption('width', '10%'),
            DTColumnBuilder.newColumn('descripcion').withTitle('Descripción').withOption('width', '20%'),
            DTColumnBuilder.newColumn('objetivo').withTitle('Objetivo').withOption('width', '60%'),
            DTColumnBuilder.newColumn(null).withTitle('Acciones').notSortable()
                    .renderWith(actionsHtml)
        ];

        scope.editar = editar;
        scope.delete = deleteRow;
        scope.consultar = consultar;

        //Carga los catalogos
        loadCatProgramBudget();

        function editar(person) {
            showDetailBudgetProgram('Editar', person.idProgramaPresupuestario),
                    scope.dtInstance.reloadData();
        }
        function deleteRow(person) {
            $scope.idProgramaPresupuestado = person.id;
            showDetailBudgetProgram('Eliminar', person.idProgramaPresupuestario),
                    scope.dtInstance.reloadData();
        }
        function consultar(person) {
            $scope.idProgramaPresupuestado = person.id;
            showDetailBudgetProgram('Consultar', person.idProgramaPresupuestario);
        }
        function createdRow(row, data, dataIndex) {            
            $compile(angular.element(row).contents())($scope);
        }

        function actionsHtml(data, type, full, meta) {
            scope.persons[data.idProgramaPresupuestario] = data;

            return '<button class="btn btn-warning" ng-click="ctrlBSS.editar(ctrlBSS.persons[' + data.idProgramaPresupuestario + '])">' +
                    '   <i class="fa fa-edit"></i>' +
                    '<md-tooltip>' + ("Editar") + '</md-tooltip>' +
                    '</button>&nbsp;' +
                    '<button class="btn btn-info" ng-click="ctrlBSS.consultar(ctrlBSS.persons[' + data.idProgramaPresupuestario + '])">' +
                    '   <i class="fa fa-exclamation"></i>' +
                    '<md-tooltip>' + ("Consultar") + '</md-tooltip>' +
                    '</button>&nbsp;' +
                    '<button class="btn btn-danger" ng-click="ctrlBSS.delete(ctrlBSS.persons[' + data.idProgramaPresupuestario + '])" )"="">' +
                    '   <i class="fa fa-trash-o"></i>' +
                    '<md-tooltip>' + ("Eliminar") + '</md-tooltip>' +
                    '</button>';
        }

        function showDetailBudgetProgram(titulo, id) {
            var data = {
                uno: titulo,
                idProgramaPresupuestario: id,
                catProgramBudget: scope.catProgramBudget
            };
            var confirm = DialogService.dialogTpl($scope, data, 'app/configuration-pp/views/detail-budget-program.tpl.html', detailBudgetProgramController);
            $mdDialog.show(confirm).then(function (answer) {
                scope.doFade = false;
                scope.showMessage = true;
                scope.message = answer.answer.message;
                scope.statusType = answer.answer.status;

                $timeout(function () {
                    scope.doFade = true;
                }, 2500);

                if (answer) {
                    scope.dtInstance.reloadData();
                    scope.showMessageSuccess = answer;
                }

            }, function () {
                console.log('Error en showDetailBudgetProgram');
            });
        }

        function detailBudgetProgramController(scope, data) {
            scope.data = data;
            scope.answer = '';

            if (data.uno == 'Agregar') {
                data.clave = "";
                data.descripcion = "";
                data.objetivo = ""

            } else if (data.uno == 'Editar' || data.uno == 'Consultar' || data.uno == "Eliminar") {
                var url = Constants.BaseURLBack + '/programapresupuestal/?anio='+ local.userYear + '&idProgramaPresupuestario=' + data.idProgramaPresupuestario;
                RestService.get(url, '', '')
                        .then(function (success) {
                            data.clave = success.data[0].idProgramaPresupuestario.toString();
                            data.descripcion = success.data[0].descripcion;
                            data.objetivo = success.data[0].objetivo;
                        })
                        .catch(function (err) {
                            console.log("Error al editar");
                            console.dir(err);
                        });
            }

            scope.cancelar = function () {
                $mdDialog.cancel();
            };

            scope.submitted = function (form) {
                if (form.$valid) {
                    if (data.uno == 'Agregar') {
                        var objParams = {
                            "idProgramaPresupuestario": data.clave,
                            "anio": local.userYear,
                            "descripcion": data.descripcion,
                            "objetivo": data.objetivo
                        };
                        var url = Constants.BaseURLBack + '/programapresupuestal';
                        RestService.post(url, 'application/json', objParams)
                                .then(function (success) {
                                    scope.data.answer = {status: true, message: "Los datos se guardaron correctamente"};
                                    $mdDialog.hide(scope.data);
                                    return true;
                                })
                                .catch(function (err) {
                                    console.dir(err);
                                    scope.data.answer = {status: false, message: "Error al registrar el Programa Presupuestario: " + err.data.message};
                                    $mdDialog.hide(scope.data);
                                    return true;
                                });
                                
                    } else if (data.uno == 'Editar') {                   
                        var url = Constants.BaseURLBack + '/programapresupuestal';
                        $http.put(url + '', {idProgramaPresupuestario: data.clave, anio: local.userYear, descripcion: data.descripcion, objetivo: data.objetivo});
                        scope.data.answer = {status: true, message: "Los datos se actualizaron correctamente"};
                        $mdDialog.hide(scope.data);
                        return true;
                        
                    } else if (data.uno == "Eliminar") {
                        var url = Constants.BaseURLBack + '/programapresupuestal/'+ local.userYear + '/' + data.clave;
                        RestService.delet(url, '', '')
                                .then(function (success) {
                                    console.dir(success);
                                    scope.data.answer = {status: true, message: "Los datos se eliminaron correctamente"};
                                    $mdDialog.hide(scope.data);
                                    return true;
                                })
                                .catch(function (err) {
                                    console.dir(err);
                                    scope.data.answer = {status: false, message: "Error al eliminar el Programa Presupuestario: " + err.data.message};
                                    $mdDialog.hide(scope.data);
                                    return true;
                                });

                    } else if (data.uno == 'Consultar') {
                        $mdDialog.cancel();
                    }
                } //Fin de form valid
            };//Fin de submitted
        }

        function loadCatProgramBudget() {
            var url = Constants.BaseURLBack + '/programapresupuestal/clave';
            RestService.get(url, '', '')
                    .then(function (data) {                        
                        scope.catProgramBudget = data.data;                        
                    })
                    .catch(function (err) {
                        console.log("error al cargar json checkBtns();");
                    });
        }
    }
})();