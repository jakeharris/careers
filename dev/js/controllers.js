var home = angular.module('career-center-home', [])

home.controller('twitter-ctrl', function ($scope, $http) {
  $scope.hw = 'Hello world!'
  $http.get('../twitter.json')
       .then(function (res) {
         $scope.tweets = res.data;  
       })
})
