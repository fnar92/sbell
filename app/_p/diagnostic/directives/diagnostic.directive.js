(function () {
    'use strict';

    angular
        .module('home.diagnostic')
        .directive('uploaderModel', uploaderModelDirective);

    function uploaderModelDirective($parse) {
        return {
            restrict: 'A',
            link: function (scope, iElement, iAttrs) 
            {
                iElement.on("change", function(e)
                {
                    $parse(iAttrs.uploaderModel).assign(scope, iElement[0].files[0]);
                });
            }
        };
    }
    
})();