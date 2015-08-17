function Blogger(res) {
  if(!res.data) throw new TypeError('Bloggers expect an HTTP JSON response.')
  
  var readPosts = function (posts) {
    for(var post in posts) {
      var d = new Date(posts[post].published.$t.split('+0000').join('')),
          author = posts[post].author[0].name.$t,
          authorURL

      posts[post].date = '' + d.toDateString().substr(0, d.toDateString().length - 5)

      if(author.indexOf(' ') != -1)
        author = author.substr(0, author.indexOf(' '))

      switch(author) {
        case 'Addye':
          authorURL = 'http://addyebb.weebly.com/'
          break
        case 'Meaghan':
          authorURL = 'http://meaghanweir.wix.com/careercoach'
          break
        default:
          authorURL = ''
          break
      }


      posts[post] = { 
        "title": posts[post].title.$t,
        "url":   posts[post].link[posts[post].link.length - 1].href, // last element is the "alternate" URL, which is more human-readable and branded as ours
        "author": {
          "name": author,
          "url": authorURL
        }
      }
    }
    return { posts: posts } // return the object we expect
  }
  
  this.posts = readPosts(res.data.feed.entry)
}