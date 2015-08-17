function Twitter(res) {
  if(!res.data)
    throw new TypeError('Twitter feeds expect HTTP JSON responses.')
  
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
  
  res.data.forEach(function (tweet, index, tweets) {
    if(tweet.text !== undefined) tweet.data = massage(tweet)
  })
  this.tweets = res.data
}