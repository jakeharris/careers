$(function() {
  var eresume = $('.eresume'),
      inputs  = eresume.children('input'),
      submit  = $('.eresume-btn')

  inputs.on('change', function () {

    // if any of them aren't complete/checked, fail
    if (    eresume.children('#name')[0].value.length < 1
        ||  eresume.children('#gid') [0].value.length < 7  //auburn gids are always of the form xxx#### or xxxxxxx
        ||  eresume.children('#job' )[0].value.length < 1
        ||  eresume.children('#resume')[0].files.length < 1
        || !$('#good-resume')[0].checked
        || !eresume.children('#privacy')[0].checked)
    {  
      submit.prop('disabled', true)
      if(!submit.hasClass('disabled'))
        submit.addClass('disabled')
    }

    // otherwise, allow submission
    else {
      submit.prop('disabled', false)
      submit.removeClass('disabled')
    }
  }).bind(this)
})