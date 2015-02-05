var home = angular.module('career-center-home', [])

home.config(function($interpolateProvider) {
  'use strict';
  $interpolateProvider.startSymbol('[[')
  $interpolateProvider.endSymbol(']]')
});

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

home.controller('calendar-ctrl', function ($scope, $http) {
  'use strict';
  console.time('complete calendar data')
  console.time('fetch calendar json')
  $http.get('http://auburn.edu/career/events.json')
       .then(function (res) {
         console.timeEnd('fetch calendar json')
         console.time('filter and sort calendar events')
         $scope.events = res.data.filter(function (el) {
           return !('external-event' in el)
         }).sort(function (a, b) {
           var aRelativeMonth = getRelativeMonth(a.date['numerical-month']),
               bRelativeMonth = getRelativeMonth(b.date['numerical-month'])
            
           if(aRelativeMonth == bRelativeMonth) return a.date.day - b.date.day
           return aRelativeMonth - bRelativeMonth
         }).slice(0, 6)
         console.timeEnd('filter and sort calendar events')
         console.timeEnd('complete calendar data')
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

home.controller('twitter-ctrl', function ($scope, $http) {
  'use strict';
  console.time('complete twitter data')
  console.time('fetch twitter json')
  $http.get('http://auburn.edu/career/twitter.json')
       .then(function (res) {
           console.timeEnd('fetch twitter json')
           console.time('massage tweets')
           var tweets = res.data
            for(var t in tweets) {
                if(tweets[t].text !== undefined) tweets[t].data = massage(tweets[t])
            }
           $scope.tweets = tweets
           console.timeEnd('massage tweets')
           console.timeEnd('complete twitter data')
       })
  // Named massage because we are getting the data into a nicer format for the page
  var massage = function (tweet) {
    var m = tweet.text,
        link = '',
        d = new Date(tweet.created_at.split('+0000').join('')),
        mentions = tweet.user_mentions
      
      //TODO: make this have multiplicity, i.e. it can handle many links per tweet
      
      if (tweet.entities.hasOwnProperty('urls') && tweet.entities.urls.length > 0)
        link = tweet.entities.urls[0].url
      else if (tweet.entities.hasOwnProperty('media') && tweet.entities.media.length > 0)
        link = tweet.entities.media[0].expanded_url
      else if (/(http:\/\/\S*){1}?/.test(m)) {
        //yes I could write this in fewer lines but I'm trying to help you read it
        var match = /(http:\/\/\S*){1}?/.exec(m)
        link = match[0]  
      }
      else link = ''
    
      if(link !== '' && ~m.indexOf(link)) {
          m = m.replace(link, '')
      }
      while(~m.indexOf('&amp;'))
          m = m.replace('&amp;', '&')
      if(~m.indexOf('RT'))
        while(/(http:\/\/\S*){1}?/.test(m))
          m = m.replace(/(http:\/\/\S*){1}?/.exec(m)[0], '')
      for(var u in mentions) {
             
      }
          
          
      d = '' + d.toDateString().substr(0, d.toDateString().length - 5)
          
      return { text: m, url: link, date: d}
  }
})

home.controller('blogger-ctrl', function ($scope, $http) {
  'use strict';
  console.time('complete blog data')
  console.time('fetch blog json')
  $http.get('https://www.googleapis.com/blogger/v3/blogs/2761218641303524120/posts?key=AIzaSyAsBnM3FEIP1giu8NLIFG7TpoJAFLyIung&maxCount=3')
       .then(function (res) {
           console.timeEnd('fetch blog json')
           console.time('sanitize and filter blog posts')
           $scope.blog = res.data[0] || res.data || { }
           $scope.blog.posts = res.data.items.slice(0, 3)
           $scope.blog.sanitized = { }
           for(var post in $scope.blog.posts) {
               var d = new Date($scope.blog.posts[post].published.split('+0000').join(''))
               $scope.blog.posts[post].date = '' + d.toDateString().substr(0, d.toDateString().length - 5)
           }
           console.timeEnd('sanitize and filter blog posts')
           console.timeEnd('complete blog data')
           //for(var p in $scope.blog.items) //only necessary to sanitize post contents, not title
             //$scope.blog.sanitized.posts[p] = sanitize($scope.blog.items[p])
       })
  // Named sanitize, and not massage, because we are stripping out lots of needless data
  var sanitize = function (post) {
    var m = post.content
    
    if(~m.indexOf('<')) {
        m = m.split(/\\<!--[A-Za-z\s\S]*?--\\>/).join('')
        m = m.split(/\\<span[A-Za-z\s\S]*?\\>/).join('').split(/\\<\/span[A-Za-z\s\S]*?\\>/).join('')
        m = m.split(/\\<div[A-Za-z\s\S]*?\\>/).join('').split(/\\<\/div[A-Za-z\s\S]*?\\>/).join('')
        m = m.split(/\\<b\\>/).join('').split(/\\<\/b\\>/).join('')
        m = m.split(/\\<i\\>/).join('').split(/\\<\/i\\>/).join('')
        m = m.split(/\\<br \/\\>/)
        for(var x = 0; x < m.length; x++) {
            m[x] = m[x].split(/\\<[A-Za-z\s\S]*?\\>[A-Za-z\s\S]*?\\<\/[A-Za-z\s\S]*?\\>/).join('')
            m[x] = m[x].split(/\\<[A-Za-z\s\S]*?\\>/).join('')
            m[x] = m[x].split(/&nbsp;/).join('')
        }
        m = m.join('')
        m = m.substr(0, 400)
        m += '...'
    }
        
    return m;
  }
})
