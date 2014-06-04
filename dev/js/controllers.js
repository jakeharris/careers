var home = angular.module('career-center-home', [])

home.controller('twitter-ctrl', function ($scope, $http) {
  $scope.hw = 'Hello world!'
  $http.get('./twitter.json')
       .then(function (res) {
           var tweets = res.data
            for(var t in tweets) {
                if(tweets[t].text !== undefined) tweets[t].data = massage(tweets[t])
            }
           $scope.tweets = tweets
       })
  var massage = function (tweet) {
    var m = tweet.text
      , link = ''
      , d = new Date(tweet.created_at)
      , mentions = tweet.user_mentions
      
      //TODO: make this have multiplicity, i.e. it can handle many links per tweet
      
      if(~m.indexOf('http:\/\/') && m[m.indexOf('http:\/\/') - 1] == ' ') {
          link = m.substr(m.indexOf('http:\/\/'), m.substr(m.indexOf('http:\/\/')).indexOf(' '))
          if(link == '') link = m.substr(m.indexOf('http:\/\/'))
          m = m.replace(link, '')
      }
      while(~m.indexOf('&amp;'))
          m = m.replace('&amp;', '&')
      for(var u in mentions) {
             
      }
          
          
      d = '' + d.toDateString().substr(0, d.toDateString().length - 5)
          
      return { text: m, url: link, date: d}
  }
})

home.controller('blogger-ctrl', function ($scope, $http) {
  $http.get('') 
})


