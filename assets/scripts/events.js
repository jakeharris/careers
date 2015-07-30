var events = angular.module('career-center-events', ['ngRoute']),
    employerMode = (window.location.href.indexOf('employers') != -1 || window.location.href.indexOf('hire.auburn.edu') != -1)

events.config(['$interpolateProvider', function($interpolateProvider) {
  'use strict';
  $interpolateProvider.startSymbol('[[')
  $interpolateProvider.endSymbol(']]')
}]);

events.controller('month-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  
  $http.get('http://auburn.edu/career/events.json')
  .then(function (res) {
    
    $scope.events = res.data.filter(function (el) {
      if(employerMode) {
        return ('employer-event' in el) && (getRelativeMonth(el.date['numerical-month']) <= 0)
      }
      else
        return (getRelativeMonth(el.date['numerical-month']) <= 0)
    }).sort(byRelativeImmediacy).slice(0, 6)
    
    if(employerMode)
      for(var ev in $scope.events) 
        if('employer-event' in $scope.events[ev])
          $scope.events[ev].url = 'employers/events/' + $scope.events[ev]['employer-event'].name + '.html'

  })
  
  var byRelativeImmediacy = function(a, b) {
      var aRelativeMonth = getRelativeMonth(a.date['numerical-month']),
          bRelativeMonth = getRelativeMonth(b.date['numerical-month'])

      if(aRelativeMonth == bRelativeMonth) return a.date.day - b.date.day
      return aRelativeMonth - bRelativeMonth
  }
  
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
}])

events.controller('calendar-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  $http.get('http://auburn.edu/career/events.json')
  .then(function (res) {
    $scope.events = res.data.filter(function (el) {
      if(employerMode) 
        return ('employer-event' in el) && (getRelativeMonth(el.date['numerical-month']) > 0 && getRelativeMonth(el.date['numerical-month']) <= 6)
      else
        return (getRelativeMonth(el.date['numerical-month']) > 0 && getRelativeMonth(el.date['numerical-month']) <= 6)
    }).sort(byRelativeImmediacy)
    
    if(employerMode)
      for(var ev in $scope.events) 
        if('employer-event' in $scope.events[ev])
          $scope.events[ev].url = 'employers/events/' + $scope.events[ev]['employer-event'].name + '.html'
  })
  
  var byRelativeImmediacy = function(a, b) {
      var aRelativeMonth = getRelativeMonth(a.date['numerical-month']),
          bRelativeMonth = getRelativeMonth(b.date['numerical-month'])

      if(aRelativeMonth == bRelativeMonth) return a.date.day - b.date.day
      return aRelativeMonth - bRelativeMonth
  }
  
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
}])