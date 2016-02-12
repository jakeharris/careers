var seoty = angular.module('career-center-seoty', [])

seoty.config(['$interpolateProvider', function ($interpolateProvider) {
  'use strict';
  $interpolateProvider.startSymbol('[[')
  $interpolateProvider.endSymbol(']]')
}]);

seoty.controller('sponsors-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  
  var sponsorsFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/seoty-sponsors.json' : '/career/seoty-sponsors.json',
      sponsors
  
  $http.get(sponsorsFile)
  .then(function (res) {
    sponsors = new Sponsors(res)
    $scope.sponsors = sponsors.list
  })
}])