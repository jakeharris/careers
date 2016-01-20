$(function () {
  var items = $('.checklist li.hidden')

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
  
  var i = 0,
      currentSwitch = items.first().children('.switch').first(),
      conditionalResults = currentSwitch.siblings('.switch-result'),
      yes = currentSwitch.children('input:checked[id*="-yes"]')[0],
      no = currentSwitch.children('input:checked[id*="-no"]')[0]
      
  console.log(yes)
  console.log(no)
  
  while(yes || no) {
    if(yes) {
      $(conditionalResults[0]).show()
      $(conditionalResults[1]).hide()
    } else if (no) {
      $(conditionalResults[0]).hide()
      $(conditionalResults[1]).show()
    }
    if($(items[i+1]).hasClass('hidden')) {
      $(items[i+1]).removeClass('hidden')
    }
    else break
    
    i++
    currentSwitch = $(items[i]).children('.switch').first()
    conditionalResults = currentSwitch.siblings('.switch-result')
    yes = currentSwitch.children('input:checked[id*="-yes"]')
    no = currentSwitch.children('input:checked[id*="-no"]')
  }
    
})