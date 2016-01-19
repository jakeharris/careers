$(function () {
  var items = $('li.hidden')

  items.each(function (i, e) {
    $(this).children('.switch').first().children('input').on('change', function () {
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
  
  items.first().removeClass('hidden')
  
  var firstSwitch = items.first().children('.switch').first(),
      conditionalResults = firstSwitch.siblings('.switch-result'),
      yes = firstSwitch.children('input:checked#*-yes'),
      no = firstSwitch.children('input:checked#*-no')

  if(yes)
    $(conditionalResults[0]).show()
    $(conditionalResults[1]).hide()
  } else if (no) {
    $(conditionalResults[0]).hide()
    $(conditionalResults[1]).show()
  }
  if($(items[i+1]).hasClass('hidden'))
    $(items[i+1]).removeClass('hidden')
    
})