module.exports.register = function (Handlebars, options) {
  'use strict';
  Handlebars.registerHelper('twitter', function (tweets, options) {
    // # Variables
    var ret = ''


    // # Functions
    // Named massage because we are getting the data into a nicer format for the page
    var massage = function (tweet) {
      var m = tweet.text,
          link = '',
          d = new Date(tweet.created_at.split('+0000').join(''))
      //, mentions = tweet.user_mentions

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

      if(link !== '' && m.indexOf(link) !== -1) {
        m = m.replace(link, '')
      }
      while(~m.indexOf('&amp;')) {
        m = m.replace('&amp;', '&')
      }

      d = '' + d.toDateString().substr(0, d.toDateString().length - 5)

      return { text: m, url: link, date: d }
    }
    
    // # Logic
    tweets = tweets.slice(0, options.hash.r || 6)
    
    for(var t in tweets){
      if(tweets.hasOwnProperty(t)) {
        if(tweets[t].text !== undefined) tweets[t].data = massage(tweets[t]) 
        if(tweets[t].data.url !== undefined
           && tweets[t].data.url !== '') {
          tweets[t].hasUrl = true
        }
        ret += options.fn(tweets[t])
      }
    }
    
    return ret
  })
}