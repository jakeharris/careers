// Expects an HTTP JSON response object.
function Calendar (res, monthsOut, employerMode) {
  if(!res.data)
    throw new TypeError('Calendars expect HTTP JSON responses.')
  if(typeof monthsOut === 'undefined')
    monthsOut = 6
  if(typeof employerMode === 'undefined')
    employerMode = false
    
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
      return month - currentMonth
    else
      return month + (12 - currentMonth)
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
  }).sort(byRelativeImmediacy)

  if(employerMode) {
    this.events.forEach(function (event, index, events) {
      if('employer-event' in event) {
        if(this.img === undefined) 
          this.img = '../assets/images/events/' + event['employer-event'].name + '-slide.png';
        event.url = 'employers/events/' + event['employer-event'].name + '.html'
      }
    }.bind(this))
  }
}