var events = angular.module('career-center-employer-events', ['ngRoute']),
    eventsFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/events.json' : '/career/events.json'

events.config(['$interpolateProvider', function($interpolateProvider) {
  'use strict';
  $interpolateProvider.startSymbol('[[')
  $interpolateProvider.endSymbol(']]')
}]);

events.controller('price-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  var price
  
  $http.get(eventsFile)
  .then(function (res) {
    price = new Price(res)
    $scope.price = price
    console.log(price)
  })
}])