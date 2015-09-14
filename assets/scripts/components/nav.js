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
});