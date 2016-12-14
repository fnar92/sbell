(function () { 
    'use strict';
	
    angular
        .module('home.mir')	
        .controller('DataTableMIRController',DataTableMIRController);
	
        function DataTableMIRController ($scope, $compile, Constants, RestService, DTOptionsBuilder, DTColumnBuilder) {
            /* jshint validthis: true */
            var vm = this;
            var urlD = Constants.BaseURLFront + '/dummyJson/data.json';
            
//            RestService.post(urlD, '', '')
//                .then(function (data) {
//                    vm.persons = data.data;
//                })
//                .catch(function (err) {
//                    console.log("error al cargar json");
//                });
//  
            vm.message = '';
            vm.edit = edit;
            vm.delete = deleteRow;
            vm.dtInstance = {};
            vm.persons = {};
            vm.dtOptions = DTOptionsBuilder.fromSource(urlD)
                .withPaginationType('full_numbers')
                .withOption('createdRow', createdRow)
                .withOption('drawCallback', drawCallback)
                .withOption('fnRowCallback', rowCallback)
                .withOption('order', [4, 'desc']);

                function rowCallback(nRow, aData, iDisplayIndex, iDisplayIndexFull) {
//                    console.log("---------------- iDisplayIndex");
//                    console.log(iDisplayIndex);
//                    console.log("---------------- iDisplayIndexFull");
//                    console.log(iDisplayIndexFull);
//                    console.log("---------------- aData");
//                    console.log(aData);
//                    console.log("---------------- nRow");
//                    console.log(nRow);
                    return nRow;
                };
                
                function createdRow(row, data, dataIndex) {
                    // Recompiling so we can bind Angular directive to the DT
                    $compile(angular.element(row).contents())($scope);
//                    console.log("---------------- data");
//                    console.log(data);
//                    console.log("---------------- row");
//                    console.log(row);
                    
                }
            
                function drawCallback(settings) {
                    var api = this.api();
                    var rows = api.rows( {page: 'current'} ).nodes();
                    var last = null;
                    api.column(4, {page: 'current'}).data().each(function(group, i) {
                        if (last !== group) {                           
                            $(rows).eq(i).before(
                              '<tr class="group section-'+ group +'" data-toggle="collapse" data-target=".'+ group +'" ><td colspan="5">' + group + '</td></tr>'
                            );
                            last = group;
                        }
                        rows[i].className = last +' collapse in';
                    });
                };
                console.log(DTColumnBuilder);
            vm.dtColumns = [
                DTColumnBuilder.newColumn(null).renderWith(function(){return '';}).notSortable(),
                DTColumnBuilder.newColumn('id').withTitle('ID').notSortable(),
                DTColumnBuilder.newColumn('firstName').withTitle('First name').notSortable(),
                DTColumnBuilder.newColumn('lastName').withTitle('Last name').notSortable(),
                DTColumnBuilder.newColumn('fase').withOption('type', 'number')
                        .renderWith(function(data, type, full) {
                            if (type === 'sort') { 
                                var value = data.match(/\d+/);
                                if (value === null)return 0;
                                else value = parseFloat(value[0]); 
                                return value.toString().length !== data.length ? value+0.0001 : value;
                            } 
                            return data;              
                        }).notSortable(),
                DTColumnBuilder.newColumn(null).withTitle('Actions').notSortable()
                    .renderWith(actionsHtml)
            ];
            
            vm.dtColumns[4].visible = false; // se oculta la columa que agrupa
            function edit(person) {
                vm.message = 'You are trying to edit the row: ' + JSON.stringify(person);
                // Edit some data and call server to make changes...
                // Then reload the data so that DT is refreshed
                //vm.dtInstance.reloadData(); //recarga el data table, pero  lo regresa a la primera pagina
            }
            function deleteRow(person) {
                vm.message = 'You are trying to remove the row: ' + JSON.stringify(person);
                // Delete some data and call server to make changes...
                // Then reload the data so that DT is refreshed
                //vm.dtInstance.reloadData(); //recarga el data table
            }
            function only() {
                return '';
            }
            function actionsHtml(data, type, full, meta) {
                vm.persons[data.id] = data;
                
                return '<button class="btn btn-warning" ng-click="ctrlDTMir.edit(ctrlDTMir.persons[' + data.id + '])">' +
                    '   <i class="fa fa-edit"></i>' +
                    '</button>&nbsp;' +
                    '<button class="btn btn-info">' +
                    '   <i class="fa fa-exclamation"></i>' +
                    '<md-tooltip>'+((data.info) ? data.info: "Todo esta perfecto !!")+'</md-tooltip>'+
                    '</button>&nbsp;'+
                    '<button class="btn btn-danger" ng-click="ctrlDTMir.delete(ctrlDTMir.persons[' + data.id + '])" )"="">' +
                    '   <i class="fa fa-trash-o"></i>' +
                    '</button>';
            }
            
        }
})();