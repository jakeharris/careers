var events = angular.module('career-center-events', ['ngRoute']),
    employerMode = (window.location.href.indexOf('employers') != -1 || window.location.href.indexOf('hire.auburn.edu') != -1)

events.config(['$interpolateProvider', function($interpolateProvider) {
  'use strict';
  $interpolateProvider.startSymbol('[[')
  $interpolateProvider.endSymbol(']]')
}]);

events.controller('month-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  
  var eventsFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/events.json' : '/career/events.json',
      calendar
  
  $http.get(eventsFile)
  .then(function (res) {
    calendar = new Calendar(res, 0, employerMode)
    $scope.events = calendar.events.slice(0, 6)
  })
}])

events.controller('calendar-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  var eventsFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/events.json' : '/career/events.json',
      calendar
  
  $http.get(eventsFile)
  .then(function (res) {
    calendar = new Calendar(res, 6, employerMode)
    $scope.events = calendar.events.slice(0, 6)
  })
}])