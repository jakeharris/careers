var home = angular.module('career-center-about-us', ['ngRoute'])

home.config(['$interpolateProvider', function ($interpolateProvider) {
  'use strict';
  $interpolateProvider.startSymbol('[[')
  $interpolateProvider.endSymbol(']]')
}]);

home.controller('hours-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  $http.get('/career/hours.json')
  .then(function (res) {
    if(res.data.hasOwnProperty('holiday'))
      $scope.holiday = res.data.holiday
    if(res.data.hasOwnProperty('types')) {
      $scope.office = res.data.types.office
      $scope.walkIn = res.data.types.walkIn
    }
  })
}])