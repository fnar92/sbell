(function () { 
    'use strict';
	
    angular
        .module('app.utils')
        .factory('ValidationService', ValidationService);

    function ValidationService($localStorage) {
        
        
        return {
            mainMenu: mainMenu
        };
        
        function mainMenu() {
            var rols = $localStorage.globals.role.split(',');
            var objValidation={};
            
            var existDate = false;   
            var oneProfile= (rols[1]) ? true: false;
            var isAdmin = $localStorage.globals.userProfile==='PLANEACION' ? true: false;
            var existUR=($localStorage.globals.userUR && $localStorage.globals.userUR!==null) ? true: false;
            var existPP=($localStorage.globals.userPP && $localStorage.globals.userPP!==null) ? true: false;
            
            if(($localStorage.globals.userStarDate && $localStorage.globals.userStarDate!=='N/A')&&($localStorage.globals.userEndDate && $localStorage.globals.userEndDate!=='N/A')){
                existDate = true;
            }
            
            objValidation={
                btnProfiles : oneProfile,
                isAdmin : isAdmin,
                existDate : existDate,
                existUR : existUR,
                existPP : existPP
            };
            
            return objValidation;
        }
        

    }

})();
