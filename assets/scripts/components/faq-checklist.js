$(function () {
  var items = $('.faq-checklist-item')

  $(items[0]).removeClass('hidden')
  items.each(function (i, e) {
    $($(this).children('.switch')[0]).children('input').on('change', function () {
      var conditionalResults = $(this).parent().siblings('.switch-result')

      console.log(this)
      if(this.checked && $(this).attr('id').indexOf('-yes') !== -1) {
        $(conditionalResults[0]).show()
        $(conditionalResults[1]).hide()
      } else {
        $(conditionalResults[0]).hide()
        $(conditionalResults[1]).show()
      }
      if($(items[i+1]).hasClass('hidden'))
        $(items[i+1]).removeClass('hidden')
    })
  })
})