(function () {
  document.addEventListener('DOMContentLoaded', function (event) {
    console.log($('[data-tooltip]'))
    console.log($('[data-for=' + $('[data-tooltip]').attr('data-tooltip') + ']'))

    var wedgeContainers = $('.link-wedges'),
        wedges = $(wedgeContainers.children('.wedge')),
        tooltips = $($('.tooltips').children('.tooltip')),
        firstWedges = $(wedgeContainers.children('[data-tooltip]:first-child')),
        firstTooltips = $($('.tooltips').children('.tooltip[data-for]:first-child'))

    firstWedges.addClass('wedge--hovered')
    firstTooltips.addClass('tooltip--show')

    wedges.hover(function () {
      $($(this).parent().children('.wedge')).filter('.wedge--hovered').removeClass('wedge--hovered')
      $(this).addClass('wedge--hovered')
      $($(this).parent().siblings('.tooltips').children('.tooltip')).filter('.tooltip--show').removeClass('tooltip--show')
      $('[data-for=' + $(this).data('tooltip') + ']').addClass('tooltip--show')
    })
  })
})()
