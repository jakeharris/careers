
var home = angular.module('career-center-hire', [])

home.config(function($interpolateProvider) {
  'use strict';
  $interpolateProvider.startSymbol('[[')
  $interpolateProvider.endSymbol(']]')
});

home.controller('calendar-ctrl', function ($scope, $http) {
  'use strict';
  $http.get('http://auburn.edu/career/events.json')
  .then(function (res) {
    $scope.events = res.data.filter(function (el) {
      return !('external-event' in el) && (getRelativeMonth(el.date['numerical-month']) <= 6)
    }).sort(function (a, b) {
      var aRelativeMonth = getRelativeMonth(a.date['numerical-month']),
          bRelativeMonth = getRelativeMonth(b.date['numerical-month'])

      if(aRelativeMonth == bRelativeMonth) return a.date.day - b.date.day
      return aRelativeMonth - bRelativeMonth
    }).slice(0, 8)
  })

  var getRelativeMonth = function (month) {    
    var currentMonth = new Date().getMonth() + 1

    // Examples:
    // month = 10, currentMonth = 11
    //   return 10 + (12 - 11) = 11
    // month = 1, currentMonth = 1
    //   return 0

    if(month - currentMonth >= 0)
      return month - currentMonth
      else
        return month + (12 - currentMonth)

  }
})