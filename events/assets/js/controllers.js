var events = angular.module('career-center-events', [])

events.controller('calendar-ctrl', function ($scope, $http) {
  $http.get('../events.json')
       .then(function (res) {
         $scope.events = res.data
       })
})