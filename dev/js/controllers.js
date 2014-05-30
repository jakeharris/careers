var home = angular.module('career-center-home', [])

home.controller('twitter-ctrl', function ($scope) {
  $scope.hw = 'Hello world!'
  $http.get('../twitter.json')
       .then(function (res) {
         $scope.tweets = res.data;  
       })
})
