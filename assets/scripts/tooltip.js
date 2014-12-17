(function () {
  document.addEventListener('DOMContentLoaded', function (event) {
    console.log($('[data-tooltip]'))
    console.log($('[data-for=' + $('[data-tooltip]').attr('data-tooltip') + ']'))
    
    var wedges = $('.link-wedges'),
        firstTooltips = $(wedges.children('[data-tooltip]')[0])
    
    console.log(firstTooltips.attr('data-tooltip'))
    $('[data-for=' + firstTooltips.attr('data-tooltip') + ']').toggleClass('tooltip--show')
  })
})()