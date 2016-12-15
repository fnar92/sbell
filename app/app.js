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


var hideSlide=function(){
    $("#slider1_container").hide();
};

var showSlide=function(){
    $("#slider1_container").show();
};

var success=function(msg){
    $.notify(msg, 'success');
};

var info=function(msg){
    $.notify(msg, 'infp');
};

var warning=function(msg){
    $.notify(msg, 'warn');
};

var error=function(msg){
    $.notify(msg, 'error');
};