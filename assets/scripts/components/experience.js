// Scroll tricks 
var currentZone = 0,
    selector = 'header, .experience.content, .zone',
    scrollTo = $(selector),
    didScroll = false,
    lastScrollTop = 0,
    navBarHeight = 60,
    timer = 250

$(window).on('scroll', function (e){
  e.preventDefault()
  e.stopPropagation()
  didScroll = true
  return false
})

function hasScrolled() {
  var currentScrollTopPosition = $(this).scrollTop(),
      nearestZone = $(getNearestTop(selector)), // this should always grab the zone whose top is beneath the window's top
      targetZone = (nearestZone.offset().top - navBarHeight <= currentScrollTopPosition) ? nearestZone.next() : nearestZone

  // if scrolling down
  if(currentScrollTopPosition > lastScrollTop) {
    $('html').animate({
      scrollTop: targetZone.offset().top - navBarHeight
    }, timer, function () {
      setInterval(function () { didScroll = false }, 50)
    })
  } else {
    $('html').animate({
      scrollTop: targetZone.prev().offset().top - navBarHeight
    }, timer, function () {
      setInterval(function () { didScroll = false }, 50)
    })
  }
  lastScrollTop = currentScrollTopPosition
}

function getNearestTop(selector) {
  var el, 
      top, 
      min = Number.MAX_VALUE, 
      els = ($ && selector) ? $(selector) : document.getElementsByTagName(selector)

  for (var i = 0; i < els.length; i++) {
    top = Math.abs(els[i].getBoundingClientRect().top)
    if (top < min) {
        min = top
        el = els[i]
    }
  } 
  return el
}