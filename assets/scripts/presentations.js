$(function () {
  
  $('#presentations input').on('change keyup', function () {
    
    var incompleteFields = []
    
    // Topic
    if($('input[name="topic"]:checked') === null) incompleteFields.push('topic')
    
    // Date and Time
    if($('input[name="date"]').val() === '') incompleteFields.push('date')
    if($('input[name="start time"]').val() === '') incompleteFields.push('start time')
    if($('input[name="end time"]').val() === '') incompleteFields.push('end time')
    
    // On behalf of...
    if($('input[name="for-whom"]:checked').val() === 'organization') {
      if ($('input[name="organization"]').val() === '') incompleteFields.push('organization')
    } else {
      if ($('input[name="course"]').val() === '') incompleteFields.push('course')
      if ($('input[name="section"]').val() === '') incompleteFields.push('section')
    }
    
    // Location details
    if($('input[name="location"]').val() === '') incompleteFields.push('location')
    if($('input[name="internet"]').val() === '') incompleteFields.push('internet')
    if($('input[name="attendance"]').val() === '') incompleteFields.push('attendance')
    
    // Description
    if($('input[name="description"]').val() === '') incompleteFields.push('description')
    
    // Primary contact
    if($('input[name="contact"]').val() === '') incompleteFields.push('contact')
    if($('input[name="email"]').val() === '') incompleteFields.push('email')
    if(($('input[name="office"]').val() === '' || !/(((\+?1(-|\s){1})?\(?([2-9]{1}\d{2})?\)?(-|\s)?([2-9]{1}\d{2}))|4)?(-|\s)?([2-9]{1}\d{3})/.test($('input[name="office"]').val()))
    && ($('input[name="cell"]').val()   === '' || !/(((\+?1(-|\s){1})?\(?([2-9]{1}\d{2})?\)?(-|\s)?([2-9]{1}\d{2})))(-|\s)?([2-9]{1}\d{3})/   .test($('input[name="cell"]'  ).val())))
      incompleteFields.push('phone')
    
    if(incompleteFields.length > 0) {
      $('#presentations input[type="submit"]')[0].disabled = 'disabled'
      return false
    }
    else
      $('#presentations input[type="submit"]')[0].disabled = ''
  })
  
  $('#presentations input[name="for-whom"]').on('change', function () {
    if($('#presentations input[name="for-whom"]:checked').val() == 'organization') {
      $('.organization-details').show()
      $('.class-details').hide()
    }
    else {
      $('.organization-details').hide()
      $('.class-details').show()
    }
  })
  
  $('#presentations input[name="topic"]').on('change', function () {
    $('html, body').animate({
        scrollTop: $($(".logistics")[0]).offset().top - 60
    }, 1000);
  })
  
  $('.class-details').hide()
  
  $('.add-secondary').on('click', function () {
    $('.add-secondary').hide()
    $('.secondary').show()
  })
})