module.exports.register = function (Handlebars, options) {
  'use strict';
  Handlebars.registerHelper('calendar', function(events, options) {
    // # Variables
    var ret = ''

    // # Functions
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
    
    // # Logic
    events = events
    .filter(function (el) {
      return !('external-event' in el)
    })
    .sort(function (a, b) {
      var aRelativeMonth = getRelativeMonth(a.date['numerical-month'])
        , bRelativeMonth = getRelativeMonth(b.date['numerical-month'])

      if(aRelativeMonth == bRelativeMonth) return a.date['day'] - b.date['day']
      return aRelativeMonth - bRelativeMonth
    })
    .slice(0, options.hash.r || 6)
    
    for(var e in events)
      if(events.hasOwnProperty(e)) {
        if(events[e].url !== undefined && events[e].url !== '')
          events[e].hasUrl = true
        ret += options.fn(events[e])
      }

    return ret;
  });
}