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
        if(navWrapper.hasClass('main--mobile'))
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
  preheader = $('header > .title')[0]
  nav = $('nav.main')[0]
  postheader = $('nav.auburn')[0]
  
  var isAboveScreen = function (el) {
    return el.getBoundingClientRect().bottom <= 0
  } 
  
  $(window).on('scroll', function () {
    if(preheader === undefined) return
    if(nav === undefined) return
    if(postheader === undefined) return  
    
    if(isAboveScreen(preheader) && !nav.classList.contains('fixed') && window.innerWidth >= 768) {
      nav.classList.add('fixed') 
      postheader.classList.add('absolute')
    } else if (!isAboveScreen(preheader) && nav.classList.contains('fixed') && window.innerWidth >= 768) {
      nav.classList.remove('fixed')
      postheader.classList.remove('absolute')
    } else if (isAboveScreen(preheader) && nav.children[0].getBoundingClientRect().top <= 0 && !nav.classList.contains('fixed')) {
      nav.classList.add('fixed') 
    }

    if(postheader.getBoundingClientRect().top <= 0 + 30 && !nav.classList.contains('shadowed') && window.innerWidth >= 768) { 
      nav.classList.add('shadowed')
    } else if (postheader.getBoundingClientRect().top > 0 + 30  && nav.classList.contains('shadowed') && window.innerWidth >= 768) {
      nav.classList.remove('shadowed') 
    } else if (nav.children[0].getBoundingClientRect().top <= 0 + 30 && !nav.classList.contains('shadowed') && window.innerWidth < 768) {
      nav.classList.add('shadowed') 
    } else if (nav.children[0].getBoundingClientRect().top > 0 + 30 && nav.classList.contains('shadowed') && window.innerWidth < 768) {
      nav.classList.remove('shadowed') 
    }
    
    // Nav controller positioning
    var navController = $('.nav-controller'),
        header = $('header')[0]
    
    if(window.innerWidth < 768 && header.getBoundingClientRect().bottom + 10 <= 0) {
      if(!navController.hasClass('fixed'))
         navController.addClass('fixed');
    }
    else if (window.innerWidth < 768 && header.getBoundingClientRect().bottom + 10 > 0){
      navController.removeClass('fixed')
    }
  })
});

// Mobile menu
$(function () {
  var nav = $('nav.main'),
      navController = $('.nav-controller')
  
  if(window.innerWidth < 768 && !nav.hasClass('fixed')) {
    nav.addClass('fixed')
  }
  
  navController.on('click', function () {
    var nav = $('nav.main')
    
    $(this).toggleClass('nav-controller--active')
    nav.toggleClass('main--mobile')
    
    if(nav.hasClass('main--mobile') && !nav.hasClass('fixed')) {
      nav.addClass('fixed')
      $(this).addClass('fixed')
    }
  })
  $(window).on('resize', function () {
    var nav = $('nav.main')[0]
    
    if(window.innerWidth >= 768 && nav.classList.contains('main--mobile')) {
      $(nav).removeClass('main--mobile')
      $('.nav-controller--active').removeClass('nav-controller--active')
    }
  })
  $('nav.main > ul > li').on('touchstart', function (e) {
    e.preventDefault()
    
    if($(this).children('ul').length > 0) 
      if($(this).hasClass('touched'))
        e.target.click()
      else
        $(this).addClass('touched')
    else 
      e.target.click()
  })
})