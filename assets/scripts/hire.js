
var home = angular.module('career-center-hire', [])

home.config(['$interpolateProvider', function($interpolateProvider) {
  'use strict';
  $interpolateProvider.startSymbol('[[')
  $interpolateProvider.endSymbol(']]')
}]);

home.controller('calendar-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  var eventsFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/events.json' : '/career/events.json',
      calendar
  
  $http.get(eventsFile)
  .then(function (res) {
    calendar = new Calendar(res, 12, true)
    $scope.firstEvents = calendar.events.slice(0, 3)
    $scope.img = calendar.img
    $scope.events = calendar.events
  })
}])
home.controller('sponsors-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  
  var sponsorsFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/sponsors.json' : '/career/sponsors.json',
      sponsors
  
  $http.get(sponsorsFile)
  .then(function (res) {
    sponsors = new Sponsors(res)
    $scope.sponsors = sponsors.list
  })
}])