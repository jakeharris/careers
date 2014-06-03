var home = angular.module('career-center-home', [])

home.controller('twitter-ctrl', function ($scope, $http) {
  $scope.hw = 'Hello world!'
  $http.get('./twitter.json')
       .then(function (res) {
           var tweets = res.data
            for(var t in tweets) {
                console.log('t is currently: ' + tweets[t].text)
                if(tweets[t].text !== undefined) tweets[t].data = massage(tweets[t].text)
            }
           $scope.tweets = tweets
       })
  var massage = function (tweet) {
    var m = tweet
      , link = ''
      , mentions = { }
      
      console.log('definitely massaging tweets')
      console.log('tweet text is ' + m)
      console.log('tweet contains "http:\/\/". ' + !!~m.indexOf('http:\/\/'))
      console.log('immediately before the first "http:\/\/", there is a space. ' + (m[m.indexOf('http:\/\/') - 1] == ' '))
      console.log('character before "http:\/\/" is ' + m[m.indexOf('http:\/\/') - 1])
      
      //TODO: make this have multiplicity, i.e. it can handle many links per tweet
      
      if(~m.indexOf('http:\/\/') && m[m.indexOf('http:\/\/') - 1] == ' ') {
          console.log('trying to make link contain: ' + m.substr(m.indexOf('http:\/\/'), m.substr(m.indexOf('http:\/\/')).indexOf(' ') || 0))
          link = m.substr(m.indexOf('http:\/\/'), m.substr(m.indexOf('http:\/\/')).indexOf(' '))
          if(link == '') link = m.substr(m.indexOf('http:\/\/'))
          m = m.replace(link, '')
          console.log('link: ' + link)
          console.log('massaged tweet: ' + m)
      }
      while(~m.indexOf('&amp;'))
          m = m.replace('&amp;', '&')
      //while(~m.indexOf('@'))
          
          
      return { text: m, url: link }
  }
})


