$(function () {
  
  $('#presentations input[type=submit]').on('click', function () {
    
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
    if($('input[name="office"]').val() === '') incompleteFields.push('office')
    if($('input[name="cell"]').val() === '') incompleteFields.push('cell')
    
    if(incompleteFields.length > 0) {
      console.log(incompleteFields)
      return false
    }
    else return true
  })
  
})