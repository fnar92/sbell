(function () { 
	'use strict';
	
        angular.module('app', [
            'ui.router',
            'ngMaterial', 
            'ngAnimate', 
            'ngStorage',
            'angularMoment',
            'moment-picker',
            'datatables',
            'ngResource',
            'app.authentication', 
            'app.home', 
            'app.utils'            
        ]);
	angular.module('app.authentication', []);
	angular.module('app.home', []);
        angular.module('app.utils', []);

})();
