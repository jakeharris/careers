// Expects an HTTP JSON response object.
function Price (res) {
  if(!res.data)
    throw new TypeError('Calendars expect HTTP JSON responses.')
  
  var abbrev = function () {
     var url = window.location.href.split('/')
     url = url[url.length - 1].split('.html')[0]
     
     return url
  }()
  var event = res.data.filter(function (el) {
    if('employer-event' in el && 'cost' in el && 'abbrev' in el && abbrev.toLowerCase() === el.abbrev.toLowerCase())
      return true
    return false
  })[0]
  
  this.earlyBird = event.cost['early-bird']
  this.earlyBirdDeadline = event.cost['early-bird-deadline']
  this.standard = event.cost.standard
  
  this.savings = this.standard - this.earlyBird
  this.now = function () {
    var today = new Date(),
        ebd   = new Date(event.cost['early-bird-deadline'])
    
    if(ebd > today)
      return event.cost['early-bird']
    else return event.cost.standard
  }()
}