var request = require('request')

module.exports.register = function (Handlebars, options) {
  'use strict';
  Handlebars.registerHelper('blog', function (opts) {
    var address = 'https://www.googleapis.com/blogger/v3/blogs/2761218641303524120/posts?key=AIzaSyAsBnM3FEIP1giu8NLIFG7TpoJAFLyIung&maxCount=3',
        blog,
        ret = ''


    request({
      url: address,
      json: true,
    }, function (error, r, body) {
      blog = r.data[0] || r.data || { }
      blog.items = r.data.items.slice(0, options.hash.r || 3)
      blog.sanitized = { }
      for(var post in blog.items) {
        if(blog.items.hasOwnProperty(post)) {
          var d = new Date(blog.items[post].published.split('+0000').join(''))
          blog.items[post].date = '' + d.toDateString().substr(0, d.toDateString().length - 5)
          ret += options.fn(blog.items[post])
        }
      }
    })
    
    return ret
  })
}