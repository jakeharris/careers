var home = angular.module('career-center-home', ['ngRoute'])

home.config(['$interpolateProvider', function ($interpolateProvider) {
  'use strict';
  $interpolateProvider.startSymbol('[[')
  $interpolateProvider.endSymbol(']]')
}]);

/* NOTE:
 * This code is TECHNICALLY vulnerable to XSS. However,
 * I made the assumption that this was okay, since we are ALWAYS ONLY
 * pulling from AUCareer accounts. If the Tigers
 * Prepare blog has an author trying to XSS people,
 * we have bigger problems. 
 *
 * However, that means that if you want to scrape from
 * a different user's accounts, please make sure that
 * we either purely trust that user's output, or 
 * (safer) we prevent against XSS. The eval() function
 * should help you.
*/

home.controller('calendar-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  
  var eventsFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/events.json' : '/career/events.json',
      calendar
  
  $http.get(eventsFile)
  .then(function (res) {
    calendar = new Calendar(res)
    $scope.events = calendar.events.slice(0, 6)
  })
}])
home.controller('twitter-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  
  var tweetsFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/twitter.json' : '/career/twitter.json',
      twitter
  
  $http.get(tweetsFile)
  .then(function (res) {
    twitter = new Twitter(res)
    $scope.tweets = twitter.tweets
  })
}])
home.controller('blogger-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  
  var blogFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/blog.json' : '/career/blog.json',
      blogger
  
  $http.get(blogFile)
  .then(function (res) {
    blogger = new Blogger(res)
    $scope.blog = blogger.posts
  })
}])
home.controller('hours-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  
  var hoursFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/hours.json' : '/career/hours.json',
      hours
  
  $http.get(hoursFile)
  .then(function (res) {
    hours = new Hours(res)
    if(hours.hasOwnProperty('holiday'))
      $scope.holiday = hours.holiday
    if(hours.hasOwnProperty('types')) {
      $scope.office = hours.office
      $scope.walkIn = hours.walkIn
    }
  })
}])
home.controller('sponsors-ctrl', ['$scope', '$http', function ($scope, $http) {
  'use strict';
  
  var sponsorsFile = (window.location.href.indexOf('localhost') != -1) ? 
                    'http://auburn.edu/career/sponsors.json' : '/career/sponsors.json',
      sponsors
  
  $http.get(sponsorsFile)
  .then(function (res) {
    sponsors = new Sponsors(res)
    $scope.sponsors = sponsors.list
  })
}])

