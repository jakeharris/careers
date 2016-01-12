(function () {
  document.addEventListener('DOMContentLoaded', function (event) {

    var wedgeContainers = $('.wedges'),
        wedges = $(wedgeContainers.children('.wedge')),
        tooltips = $($('.tooltips').children('.tooltip')),
        firstWedges = $(wedgeContainers.children('[data-tooltip]:first-child')),
        firstTooltips = $($('.tooltips').children('.tooltip[data-for]:first-child'))

    firstWedges.addClass('wedge--hovered')
    firstTooltips.addClass('tooltip--show')

    wedges.hover(function () {
      $($(this)
          .parent()
          .children('.wedge')
       ).filter('.wedge--hovered')
        .removeClass('wedge--hovered')
      $(this).addClass('wedge--hovered')
      $($(this)
          .parent()
          .siblings('.tooltips')
          .children('.tooltip')
       ).filter('.tooltip--show')
        .removeClass('tooltip--show')
      $('[data-for=' 
        + $(this).data('tooltip') 
        + ']').addClass('tooltip--show')
    })
    wedges.bind('touchstart', function(e) {
      e.preventDefault()
      if($(this).hasClass('wedge--hovered')) {
        window.location.href = $(this).attr('href')
      }
      else {
        $($(this)
            .parent()
            .children('.wedge')
         ).filter('.wedge--hovered')
          .removeClass('wedge--hovered')
        $(this).addClass('wedge--hovered')
        $($(this)
            .parent()
            .siblings('.tooltips')
            .children('.tooltip')
         ).filter('.tooltip--show')
          .removeClass('tooltip--show')
        $('[data-for=' 
          + $(this).data('tooltip') 
          + ']').addClass('tooltip--show')
      }
    })
    tooltips.each(function (i) { 
      $(this).parent()
        .siblings('.wedges')
        .children('[data-tooltip=' 
                  + $(this).data('for') 
                  + ']')
      $(this).attr('href',
                   $(this).parent()
                      .siblings('.wedges')
                      .children('[data-tooltip=' 
                                + $(this).data('for') 
                                + ']')
                      .attr('href')
                  )
    })
  })
})()
