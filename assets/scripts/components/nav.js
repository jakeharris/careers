$(function() {
  var clrTimeout = 0,
      onHoverStart = function(e) {
        e.preventDefault()
        $(this).parent().addClass('hover--active')
        if(clrTimeout) {
          clearTimeout(clrTimeout)
          clrTimeout = 0
        }
      },
      onHoverEnd = function (e) {
        e.preventDefault()
        clrTimeout = setTimeout(function () {
            $(this).parent().removeClass('hover--active')
        }.bind(this), 500)
      };
  
  $('nav.header ul li ul').hover(onHoverStart, onHoverEnd);
  
  var scrollToElement = function (target) {
    var navHeight = 100,
        offset = target.offset().top,
        scroll = offset - navHeight
    
    $('html, body').animate({
      scrollTop: scroll
    }, 500)
  }
  
  $('a[href*="#"]').click(function () {
    var IDindex = $(this).attr('href').indexOf('#') + 1,
        targetID = $(this).attr('href').substring(IDindex)
    
    console.log('targetID: ' + targetID)
    
    scrollToElement($('[id=' + targetID + ']'))
  })
});