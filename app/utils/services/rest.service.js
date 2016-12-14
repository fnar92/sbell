(function () { 
    'use strict';
	
    angular
        .module('app.utils')
        .factory('RestService', RestService);

    function RestService($http, $q) {
        return {
            post: post,
            get: get,
            put: put,
            delet:delet,
            upload: upload
        };
        
        function upload(url, contentType, file) {
            var deferred = $q.defer();
            var formData = new FormData();
            formData.append("file", file);
            return $http.post(url, formData, {
                headers: {
                    "Content-type": contentType
                },
                transformRequest: angular.identity
            })
            .success(function(res)
            {
                deferred.resolve(res);
            })
            .error(function(msg, code)
            {
                deferred.reject(msg);
            });
            
            return deferred.promise;
        }
        
        function post(url, contentType , params) {
            var ctype = null;
            var req = null;
            if(contentType===''){
                req = {
                    method: 'POST',
                    url: url,
                    data: params
                };
            }else{
                if(contentType==='x'){
                    ctype = 'application/x-www-form-urlencoded';
                    req = {
                        method: 'POST',
                        url: url,
                        transformRequest: function (obj) {
                            var str = [];
                            for (var p in obj)
                                str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                            return str.join("&");
                        },
                        data: params,
                        headers: {'Content-Type': ctype}
                    };
                }
            }
            var deferred = $q.defer();
            $http(req)
            .then(
                function (data) {
                    deferred.resolve(data);                        
                },
                function(errResponse){
                    deferred.reject(errResponse);
                }
            );
            return deferred.promise;
        }
        
        function get(url, contentType , params) {
            var deferred = $q.defer();
            $http({
                method: 'GET',
                url: url,
                data: params,
                headers: {'Content-Type': contentType}
            })
            .then(
                function (data) {
                    deferred.resolve(data);                        
                },
                function(errResponse){
                    deferred.reject(errResponse);
                }
            );
            return deferred.promise;
        }
        
        function put(url, contentType , params) {
            var deferred = $q.defer();
            $http.put(url + '?' + params)
            .then(
                function (data) {
                    deferred.resolve(data);                        
                },
                function(errResponse){
                    deferred.reject(errResponse);
                }
            );
            return deferred.promise;
        }
        
        function delet(url, contentType , params) {
            var deferred = $q.defer();
            $http.delete(url + '?' + params)
            .then(
                function (data) {
                    deferred.resolve(data);                        
                },
                function(errResponse){
                    deferred.reject(errResponse);
                }
            );
            return deferred.promise;
        }

    }

})();
