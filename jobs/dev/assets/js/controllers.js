var home = angular.module('career-center-jobs', [])

home.controller('calendar-ctrl', function ($scope, $http) {
  $http.get('./events.json')
       .then(function (res) {
         $scope.events = res.data.slice(0, 2)
       })
})