// Navigation aid
$(function() {
  var clrTimeout = 0,
      navWrapper = $('nav.main'),   // for determining if we're using the mobile nav
      onHoverStart = function(e) {
        e.preventDefault()
      
        // if this is a menu item, but it has a menu as its child
        // (so therefore, this is the header of a submenu),
        //   hide all other submenus.
        //   then, count this submenu as active.
        if($(this).children('ul').length > 0) {
          $('nav.main ul li').removeClass('hover--active')
          $(this).addClass('hover--active') 
        }
        // otherwise, do nothing. don't clear the timeout, either.
        else return;
        
        
        if(clrTimeout) {
          clearTimeout(clrTimeout)
          clrTimeout = 0
        }
      },
      onHoverEnd = function (e) {
        e.preventDefault()
        
        // if we're in the mobile menu, don't add the delay
        if(navWrapper.hasClass('mobile'))
          $(this).removeClass('hover--active')
        else 
          clrTimeout = setTimeout(function () {
              $(this).removeClass('hover--active')
          }.bind(this), 500)
      };
  
  $('nav.main ul li').hover(onHoverStart, onHoverEnd);
});

// Positioning the nav 
$(function () {
  var preheader, nav, postheader
  $(window).on('scroll', function () {
    if(preheader === undefined) preheader = $('header .title')[0]
    if(preheader === undefined) return

    if(nav === undefined) nav = $('nav.main')[0]
    if(nav === undefined) return

    if(postheader === undefined) postheader = $('nav.auburn')[0]
    if(postheader === undefined) return  

    if(preheader.getBoundingClientRect().bottom <= 0 && !nav.classList.contains('fixed') && window.innerWidth >= 768) {
      nav.classList.add('fixed') 
      postheader.classList.add('absolute')
    } else if (preheader.getBoundingClientRect().bottom > 0 && nav.classList.contains('fixed') && window.innerWidth >= 768) {
      nav.classList.remove('fixed')
      postheader.classList.remove('absolute')
    } else if (preheader.getBoundingClientRect().bottom <= 0 && nav.children[0].getBoundingClientRect().top <= 0 && !nav.classList.contains('fixed')) {
      nav.classList.add('fixed') 
    } else if (preheader.getBoundingClientRect().bottom > 0 && nav.classList.contains('fixed')) {
      nav.classList.remove('fixed') 
    } 

    if(postheader.getBoundingClientRect().top <= 0 + 30 && !nav.classList.contains('bordered') && window.innerWidth >= 768) { 
      nav.classList.add('bordered')
    } else if (postheader.getBoundingClientRect().top > 0 + 30  && nav.classList.contains('bordered') && window.innerWidth >= 768) {
      nav.classList.remove('bordered') 
    } else if (nav.children[0].getBoundingClientRect().top <= 0 + 30 && !nav.classList.contains('bordered') && window.innerWidth < 768) {
      nav.classList.add('bordered') 
    } else if (nav.children[0].getBoundingClientRect().top > 0 + 30 && nav.classList.contains('bordered') && window.innerWidth < 768) {
      nav.classList.remove('bordered') 
    }


    if(nav.classList.contains('mobile') && !nav.classList.contains('fixed')) {
      nav.classList.add('fixed')
    }
  })
});

// Mobile menu
$(function () {
  $('.nav-controller').on('click', function () {
    var nav = $('nav.main')
    
    $(this).toggleClass('nav-controller--active')
    nav.toggleClass('mobile')
  })
  $(window).on('resize', function () {
    var nav = $('nav.main')[0]
    
    if(window.innerWidth >= 768 && nav.classList.contains('mobile'))
      nav.remove('mobile')
  })
  $('nav.main > ul > li').on('touchstart', function (e) {
    e.preventDefault()
    
    if($(this).children('ul').length > 0) 
      if($(this).hasClass('hover--active'))
        e.target.click()
      else
        $(this).addClass('hover--active')
        
    e.target.click()
  })
})