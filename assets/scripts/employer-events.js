var events = angular.module('career-center-events', ['ngRoute']),
    employerMode = true,
    eventsFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/events.json' : '/career/events.json'

events.config(['$interpolateProvider', function($interpolateProvider) {
  'use strict';
  $interpolateProvider.startSymbol('[[')
  $interpolateProvider.endSymbol(']]')
}]);

events.controller('calendar-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  var calendar
  
  $http.get(eventsFile)
  .then(function (res) {
    calendar = new Calendar(res, 6, true, false)
    $scope.events = calendar.events
    $scope.pastEvents = calendar.pastEvents
  })
}])