var express = require('express');
var app = express();
var request = require('request');

app.use(express.static(__dirname));

app.listen(process.env.PORT || 3000);

request({
  url: 'https://www.googleapis.com/blogger/v3/blogs/2761218641303524120/posts?key=AIzaSyAsBnM3FEIP1giu8NLIFG7TpoJAFLyIung&maxCount=3',
  json: true,
}, function (error, r, body) {
  console.log('r =========')
  console.log(r)
  console.log('===========')
  console.log('body ======')
  console.log(body)
  console.log('===========')
  blog = r.data[0] || r.data || { }
  blog.items = r.data.items.slice(0, options.hash.r || 3)
  blog.sanitized = { }
  console.log('blog =====')
  console.log(blog)
  console.log('==========')
  for(var post in blog.items) {
    if(blog.items.hasOwnProperty(post)) {
      var d = new Date(blog.items[post].published.split('+0000').join(''))
      blog.items[post].date = '' + d.toDateString().substr(0, d.toDateString().length - 5)
      ret += options.fn(blog.items[post])
    }
  }
})