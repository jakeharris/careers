// Expects an HTTP JSON response object.
function Calendar (res) {
  if(!res.data)
    throw new TypeError('Calendars expect HTTP JSON responses.')
       
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
  
  this.events = res.data.filter(function (el) {
    if('__HOW-TO' in el) return false
    return (!isOver(el.date)) && (getRelativeMonth(el.date['numerical-month']) <= 6)
  }).sort(function (a, b) {
    var aRelativeMonth = getRelativeMonth(a.date['numerical-month']),
        bRelativeMonth = getRelativeMonth(b.date['numerical-month'])

    if(aRelativeMonth == bRelativeMonth) return a.date.day - b.date.day
    return aRelativeMonth - bRelativeMonth
  })
}