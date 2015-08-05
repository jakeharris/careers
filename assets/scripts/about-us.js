var home = angular.module('career-center-about-us', ['ngRoute'])

home.config(['$interpolateProvider', function ($interpolateProvider) {
  'use strict';
  $interpolateProvider.startSymbol('[[')
  $interpolateProvider.endSymbol(']]')
}]);

home.controller('hours-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  
  var hoursFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/hours.json' : '/career/hours.json'
  
  $http.get(hoursFile)
  .then(function (res) {
    if(res.data.hasOwnProperty('holiday'))
      $scope.holiday = res.data.holiday
    if(res.data.hasOwnProperty('types')) {
      $scope.office = res.data.types.office
      $scope.walkIn = res.data.types.walkIn
    }
  })
}])