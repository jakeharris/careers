$(function() {
  $('.hover').bind('touchstart', function(e) {
    e.preventDefault()
    $(this).toggleClass('hover--active')
  })
});