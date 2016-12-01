<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="utf-8">
    <title>SBELLA</title>

    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css"/><!-- html -->
    <link rel="stylesheet" href="assets/css/material/angular-material.min.css" /><!-- components -->
    <link rel="stylesheet" href="assets/css/angular-moment-picker/angular-moment-picker.min.css"> <!-- moment picker -->
    <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/data-tables/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/data-tables/dataTables.material.min.css">
    <link rel="stylesheet" href="assets/css/data-tables/angular-datatables.min.css" />

    <link rel="stylesheet" href="assets/css/angular-text-editor/textAngular.css" />

    <link rel="stylesheet" href="assets/css/main.css" />

    <script src="assets/libs/ie/modernizr.js" ></script>
        
</head>
<body ng-app="app">
<ui-view></ui-view>

    <!-- js angular -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/angular/1.5.8/angular.min.js"></script>        
    <script src="assets/libs/data-tables/angular-resource.min.js"></script>
    <script src="assets/libs/data-tables/jquery.dataTables.min.js"></script>              
    <script src="assets/libs/data-tables/angular-datatables.min.js"></script>
    <script src="assets/libs/bootstrap/bootstrap.min.js"></script>       
    <script src="assets/libs/material-1.1.0/angular-animate.min.js"></script>
    <script src="assets/libs/material-1.1.0/angular-aria.min.js"></script>
    <script src="assets/libs/material-1.1.0/angular-messages.min.js"></script>
    <script src="assets/libs/material-1.1.0/angular-material.min.js"></script>
    <script src="assets/libs/angular/complements/angular-ui-router/angular-ui-router.min.js"></script>
    <script src="assets/libs/angular/complements/angular-storage/ngStorage.min.js"></script>
    <script src="assets/libs/angular/complements/angular-moments/moment-with-locales.min.js"></script>
    <script src="assets/libs/angular/complements/angular-moments/angular-moment.min.js"></script>
    <script src="assets/libs/angular/complements/angular-moment-picker/angular-moment-picker.min.js"></script>
    <script src="assets/libs/angular/complements/angular-navBar/navBar.js"></script>

    <script src="assets/libs/angular/complements/angular-text-editor/textAngular-rangy.min.js"></script>
    <script src="assets/libs/angular/complements/angular-text-editor/textAngular-sanitize.min.js"></script>
    <script src="assets/libs/angular/complements/angular-text-editor/textAngular.min.js"></script>
    <script src="assets/libs/angular/complements/angular-text-editor/textAngularSetup.js"></script>
    
    <!-- end js angular -->	    
     
    <!-- inject: app global js -->
    <script src="app/app.js"></script>
    <script src="app/app-config.js"></script>
    <script src="app/app-run.js"></script>
    <script src="app/app-constants.js"></script>
    <!-- endinject -->
    
    <!-- inject: util services js -->
    <script src="app/utils/services/rest.service.js"></script>
    <script src="app/utils/services/base64.service.js"></script>
    <script src="app/utils/services/dialog.service.js"></script>
    <script src="app/utils/services/validations/validation.service.js"></script>
    <script src="app/utils/services/shared.service.js"></script>
    <!-- endinject -->         
    
    <!-- inject: login js -->
    <script src="app/home/services/home.service.js"></script>
    <script src="app/home/controllers/home.controller.js"></script>
    <!-- endinject -->
    
    <!-- inject: login js -->
    <script src="app/login/services/login.service.js"></script>
    <script src="app/login/controllers/login.controller.js"></script>
    <!-- endinject -->
    
    
    
    
    <!-- inject: home js
    <script src="app/main/controllers/menu.controller.js"></script> 
    <script src="app/main/controllers/breadcrumb.controller.js"></script>
    <script src="app/main/controllers/select-perfil.controller.js"></script> 
    <script src="app/main/controllers/about.controller.js"></script>
    endinject -->
    
</body>
</html>