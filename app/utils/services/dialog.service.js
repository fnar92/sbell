(function () { 
    'use strict';

     angular
        .module('app.utils')
        .factory('DialogService',DialogService);

    function DialogService($mdDialog) {
        return {
            dialogTpl: dialogTpl,
            dialogConfirm: dialogConfirm
        };

        function dialogTpl(scope, data, template, ctrl) {

            return {
                controller: ctrl,
                templateUrl: template,
                parent: angular.element(document.body),
                clickOutsideToClose:true,
                locals: {
                    data: data
                }, // sent data
                fullscreen: scope.customFullscreen // Only for -xs, -sm breakpoints.
            };

        }

        function dialogConfirm(ev, title, quest, btnYes, btnNo) {

            return $mdDialog.confirm()
                .title(title)
                .textContent(quest)
                .ariaLabel('Lucky day')
                .targetEvent(ev)
                .ok(btnYes)
                .cancel(btnNo);
        }
    }
	
})();