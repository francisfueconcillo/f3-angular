'use strict';

var f3angular = angular.module('f3angular', ['ui.bootstrap', 'ngResource', 'ngRoute', 'ngAnimate']);

f3angular.config(['$routeProvider', '$httpProvider',
    function ($routeProvider) {
        //
        // $routeProvider.
        //     when('/login', {controller:'LoginController', templateUrl:'ui/partials/login.html'}).
        //     therwise({redirectTo:'/dashboard'});
    }
]);
