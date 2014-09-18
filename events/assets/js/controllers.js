var events = angular.module('career-center-events', [])

events.controller('calendar-ctrl', function ($scope, $http) {
  $http.get('../events.json')
       .then(function (res) {
         $scope.events = res.data.sort(function (a, b) {
            if(a.date['numerical-month'] == b.date['numerical-month']) return a.date['day'] - b.date['day']
            return a.date['numerical-month'] - b.date['numerical-month']
         })
       })
})