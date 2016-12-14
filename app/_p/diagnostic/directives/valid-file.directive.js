(function () {
    'use strict';
    // http://stackoverflow.com/questions/29778809/validating-file-extension-in-angularjs-before-uploading
    // http://stackoverflow.com/questions/25885341/validate-file-size-before-upload-for-input-type-file-using-angularjs
    angular
        .module('home.diagnostic')
        .directive('validFile', validFileDirective);

    function validFileDirective() {
        return {
            require: 'ngModel',
            link: function (scope, elem, attrs, ngModel) {
                var validFormats = ['jpg','jpeg','png'];
                var validSize = 26214400; // 25 MB 
                elem.bind('change', function () {
                    validImage(false);
                    scope.$apply(function () {
                        ngModel.$render();
                    });
                });
                ngModel.$render = function () {
                    ngModel.$setViewValue(elem.val());
                };
                function validImage(bool) {
                    var size =(elem[0].files[0].size < validSize) ? true:false;
                    ngModel.$setValidity('extension', (bool && size));
                }
                ngModel.$parsers.push(function(value) {
                    var ext = value.substr(value.lastIndexOf('.')+1);
                    if(ext==='') return;
                    if(validFormats.indexOf(ext) === -1){
                        return value;
                    }
                    validImage(true);
                    return value;
                });
            }
        };
    }
    
})();