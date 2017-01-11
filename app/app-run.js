(function () { 
    'use strict';
	
    angular
        .module('app')
        .run(run);
    
    function run ($rootScope, $location, $http, $localStorage) {        
        
        console.log('init run app');
        $rootScope.user={};
        $rootScope.isAuth=false;
        
        
        /*alert();
        if ($localStorage.globals) {
            $http.defaults.headers.common['Authorization'] = 'Basic ' + $localStorage.globals.authdata;
        }
        
        $rootScope.$on('$locationChangeStart', function (event, next, current) {
            if($location.path() !== '/login' && !$localStorage.globals){
                $location.path('/login');
            }
        });*/
			
    }

})();