// Expects an HTTP JSON response object.
function Calendar (res, monthsOut, employerMode, staticMode) {
  if(!res.data)
    throw new TypeError('Calendars expect HTTP JSON responses.')
  if(typeof monthsOut === 'undefined')
    monthsOut = 6
  if(typeof employerMode === 'undefined')
    employerMode = false
  if(typeof staticMode === 'undefined')
    staticMode = false
    
  var isOver = function (date) {
    var currentDate = new Date()
    if(date['numerical-month'] == (currentDate.getMonth() + 1))
      if(date.day < currentDate.getDate())
        return true;
  }
  var getRelativeMonth = function (month) {
    var currentMonth = new Date().getMonth() + 1
    
    // Examples:
    // month = 10, currentMonth = 11
    //   return 10 + (12 - 11) = 11
    // month = 1, currentMonth = 1
    //   return 0

    if(month - currentMonth >= 0)
      return parseInt(month) - currentMonth
    else
      return parseInt(month) + (12 - currentMonth)
  }
  var byRelativeImmediacy = function (a, b) { // sorting function
    var aRelativeMonth = getRelativeMonth(a.date['numerical-month']),
        bRelativeMonth = getRelativeMonth(b.date['numerical-month'])

    if(aRelativeMonth == bRelativeMonth) return a.date.day - b.date.day
    return aRelativeMonth - bRelativeMonth
  }
  
  this.events = res.data.filter(function (el) {
    
    if('__HOW-TO' in el) return false
    
    if(employerMode)
      return ('employer-event' in el) && (getRelativeMonth(el.date['numerical-month']) <= monthsOut)
    else
      return (getRelativeMonth(el.date['numerical-month']) <= monthsOut)
  }).filter(function (el) {
    if('__HOW-TO' in el) return false
    if(staticMode)
      return true
    else
      return (!isOver(el.date))
  }).sort(byRelativeImmediacy)

  if(employerMode) {
    this.events.forEach(function (event, index, events) {
      if('employer-event' in event) {
        if(event.abbrev === undefined)
          event.url = event['employer-event'].registration
        else event.url = 'employers/events/' + event.abbrev + '.html'
        
        if(this.img === undefined && event.abbrev !== undefined) {
          this.img = 'assets/images/events/' + event.abbrev + '-slide.png'
          this.url = 'employers/events/' + event.abbrev + '.html'
        }
        
        if(
          event.cost !== undefined
          && event.cost['early-bird-deadline']
          && new Date(event.cost['early-bird-deadline']) >= new Date()
        )
          event.cost = event.cost['early-bird']
          
        else if (event.cost !== undefined) 
          event.cost = event.cost.standard
      }
    }.bind(this))
  }
  else this.events.forEach(function (event, index, events) {
    if(event.abbrev !== undefined)
      event.url = 'students/events/' + event.abbrev + '.html'
  })
}