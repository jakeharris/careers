var home = angular.module('career-center-about-us', ['ngRoute'])

home.config(['$interpolateProvider', function ($interpolateProvider) {
  'use strict';
  $interpolateProvider.startSymbol('[[')
  $interpolateProvider.endSymbol(']]')
}]);

home.controller('hours-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  
  var hoursFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/hours.json' : '/career/hours.json',
      hours
  
  $http.get(hoursFile)
  .then(function (res) {
    hours = new Hours(res)
    if(hours.hasOwnProperty('holiday'))
      $scope.holiday = hours.holiday
    $scope.office = hours.office
    $scope.walkIn = hours.walkIn
  })
}])