

<!doctype html>
<html lang="en" ng-app="">
  <head>
    <base href="..">
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Presentation Request Submitted | Career Center</title>

    <!-- Bootstrap & Core CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link href="//cdn.auburn.edu/assets/css/default.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.gray/1.3.6/gray.min.css">
    <link rel="stylesheet" href="assets/styles/bootstrap-datepicker3.standalone.min.css">
    <link rel="stylesheet" href="assets/styles/bootstrap-timepicker.min.css">
    <!-- Application CSS -->
    <!-- build:css assets/styles/presentation-submission.min.css -->
      <link rel=stylesheet href="assets/styles/presentation-submission.css">
    <!-- endbuild -->

    <!-- Less Than IE9 Support of HTML5 and CSS Media Queries -->
    <!--[if lt IE 9]>
<script src="//cdn.auburn.edu/assets/js/html5shiv.js"></script>
<script src="//cdn.auburn.edu/assets/js/respond.src.js"></script>
<link href="//cdn.auburn.edu/cross-domain/respond-proxy.html" id="respond-proxy" rel="respond-proxy">
<link href="assets/img/respond.proxy.gif" id="respond-redirect" rel="respond-redirect">
<script src="assets/js/respond.proxy.js"></script>
<![endif]-->

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://www.auburn.edu/template/2013/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://www.auburn.edu/template/2013/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://www.auburn.edu/template/2013/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="https://www.auburn.edu/template/2013/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="https://www.auburn.edu/template/2013/assets/ico/favicon.png">

    <!-- Angular & Core JS -->
    <script>
      document.createElement('picture')
    </script>
    <script src="http://auburn.edu/career/assets/scripts/picturefill.min.js" async></script>
    <!-- It would be awesome if I could only load angular based on whether the particular view had a controller -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="assets/scripts/bootstrap-datepicker.min.js"></script>
    <script src="assets/scripts/bootstrap-timepicker.min.js"></script>
    
    <!-- Application-specific CSS/JS -->
    <!-- build:js assets/scripts/presentation-submission.min.js -->
      <script src="assets/scripts/presentation-submission.js"></script>
    <!-- endbuild -->
    
  </head>

  <body class="presentation-submission">
    <header role="banner">

  <div class="preheader" id="preheader">
    <div class="hexes">
      <div class="hex"><a href="http://auburn.edu"><img src="http://auburn.edu/career/assets/images/AU-emblem.png"></a></div>
    </div>
    <h1><a href="http://auburn.edu/career/">Career Center</a></h1>
  </div>
  
  
  <nav id="nav" class="header nav-collapse">
    <div class="nav-controller" id="hamburger">
      <i class="icon-navicon"></i>
    </div>
    <div class="nav-wrapper">
      <ul>
        <li>
          <a href="http://www.auburn.edu/career/students/">Students</a>
          <ul>
            <li><a href="http://www.auburn.edu/career/students/">Undergraduate</a></li>
            <!--<li><a href="#">Graduate</a></li>-->
            <li><a href="http://www.auburn.edu/career/alumni/">Alumnus</a></li>
            <li><a href="http://www.auburn.edu/career/futuretigers/">Prospective</a></li>
          </ul>
        </li>
        <li>
          <a href="http://www.auburn.edu/career/parents/">Families</a>
        </li>
        <li>
          <a href="http://www.auburn.edu/career/faculty/">Faculty</a>
        </li>
        <li>
          <a href="http://hire.auburn.edu">Employers</a>
        </li>
        <li><a href="http://auburn.edu/career/events/">Events</a></li>
        <li>
          <a href="http://auburn.edu/career/aboutus/">About Us</a>
          <!--<ul>
            <li><a href="#">Office Info</a></li>
            <li><a href="#">Staff</a></li>
            <li><a href="#">Campus Partners</a></li>
          </ul>-->
        </li>
      </ul>
    </div>
  </nav>
  
  <nav class="postheader" id="postheader">
    <ul>
        <li><a href="http://www.auburn.edu/main/sitemap.php">A-Z Index</a></li>
        <li><a href="http://www.auburn.edu/map">Map</a></li>
        <li><a href="http://www.auburn.edu/main/auweb_campus_directory.html">People Finder</a></li>
        <li><a href="http://auaccess.auburn.edu/">AU Access</a></li>
        <li>
            <form action="http://search.auburn.edu" method="get">
                <input type="search" placeholder="Search Auburn" name="q">
            </form>
        </li>
    </ul>
  </nav>
</header>

<!-- Positioning the nav -->
<script>
  var preheader, nav, postheader;
  window.onscroll = function () {
    if(preheader === undefined) preheader = document.getElementById('preheader')
    if(preheader === undefined) return
    
    if(nav === undefined) nav = document.getElementById('nav')
    if(nav === undefined) return
    
    if(postheader === undefined) postheader = document.getElementById('postheader')
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
  }
</script>
<!-- Mobile menu -->
<script>
  var hamburger = document.getElementById('hamburger')
  hamburger.addEventListener('click', function () {
    var navWrapper = document.getElementById('nav').children[1]
     
    if(hamburger === undefined) hamburger = document.getElementById('hamburger')
    if(hamburger === undefined) return
    
    if(navWrapper.classList.contains('mobile-nav--active'))
      navWrapper.classList.remove('mobile-nav--active')
    else 
      navWrapper.classList.add('mobile-nav--active')
  })
  window.addEventListener('resize', function () {
    var navWrapper = document.getElementById('nav').children[1]
    
    if(window.innerWidth >= 768 && navWrapper.classList.contains('mobile-nav--active'))
      navWrapper.classList.remove('mobile-nav--active')
  })
  
  var submenus = document.getElementById('nav').children[1].getElementsByTagName('')
</script>
    <div class="container">
      

<p>
  <?php
    if ($topic == "select") {
      echo "<center>You did not specify a topic.<br>";
      echo "Please go back and select a topic so your request can be submitted.</center>\n\n";
      exit;
    }
	  
    if ($type == "select") {
      echo "<center>You did not specify a program type.<br>";
      echo "Please go back and select a program type so your request can be submitted.</center>\n\n";
      exit;
    }
	  
    if ($date == "") {
      echo "<center>You did not specify a date.<br>";
      echo "Please go back and enter a date so your request can be submitted.</center>\n\n";
      exit;
    }			
    if ($start_time == "") {
      echo "<center>You did not specify a start time.<br>";
      echo "Please go back and enter a start time so your request can be submitted.</center>\n\n";
      exit;
    }			

    if ($end_time == "") {
      echo "<center>You did not specify an end time.<br>";
      echo "Please go back and enter an end time so your request can be submitted.</center>\n\n";
      exit;
    }
    if ($location == "") {
      echo "<center>You did not give a location.<br>";
      echo "Please go back and enter a location so your request can be submitted.</center>\n\n";
      exit;
    }			
	if ($contact == "") {
      echo "<center>You did not give a contact name.<br>";
      echo "Please go back and enter this information so your request can be submitted.</center>\n\n";
      exit;
    }						
	if ($email == "") {
      echo "<center>You did not give an email.<br>";
      echo "Please go back and enter this information so your request can be submitted.</center>\n\n";
      exit;
    }
	if ($office == "") {
      echo "<center>You did not give an office phone number.<br>";
      echo "Please go back and enter this information so your request can be submitted.</center>\n\n";
      exit;
    }	
    if ($cell == "") {
      echo "<center>You did not give a cell phone number.<br>";
      echo "Please go back and enter this information so your request can be submitted.</center>\n\n";
      exit;
    }
    ?>

  <?php 
    if (isset($_POST['date']))
      $date = strip_tags(trim($_POST['date']), ENT_NOQUOTES);
    if (isset($_POST['start_time']))
      $start_time = strip_tags(trim($_POST['start_time']), ENT_NOQUOTES);
    if (isset($_POST['end_time']))
      $end_time = strip_tags(trim($_POST['end_time']), ENT_NOQUOTES);
    if (isset($_POST['course']))
      $course = strip_tags(trim($_POST['course']), ENT_NOQUOTES);
    if (isset($_POST['section']))
      $section = strip_tags(trim($_POST['section']), ENT_NOQUOTES );
    if (isset($_POST['attendance']))
      $attendance = strip_tags(trim ($_POST['attendance']), ENT_NOQUOTES );
    if (isset($_POST['organization']))
      $organization = strip_tags(trim ($_POST['organization']), ENT_NOQUOTES);
    if (isset($_POST['location']))
      $location = strip_tags(trim($_POST['location']), ENT_NOQUOTES);
    if (isset($_POST['description']))
      $description = strip_tags(trim($_POST['description']), ENT_NOQUOTES);
    if (isset($_POST['contact']))
      $contact = strip_tags(trim($_POST['contact']), ENT_NOQUOTES);
    if (isset($_POST['email']))
      $email = strip_tags(trim($_POST['email']), ENT_NOQUOTES);
    if (isset($_POST['office']))
      $office = strip_tags(trim($_POST['office']), ENT_NOQUOTES);
    if (isset($_POST['cell']))
      $cell = strip_tags(trim($_POST['cell']), ENT_NOQUOTES);
    if (isset($_POST['secondary']))
      $secondary = strip_tags(trim($_POST['secondary']), ENT_NOQUOTES);
    if (isset($_POST['secondary-email']))
      $secondary_email = strip_tags(trim($_POST['secondary-email']), ENT_NOQUOTES );
    if (isset($_POST['secondary-office']))
      $secondary_office = strip_tags(trim($_POST['secondary-office']), ENT_NOQUOTES);
    if (isset($_POST['secondary-cell']))
      $secondary_cell = strip_tags(trim($_POST['secondary-cell']), ENT_NOQUOTES);
    ?>

  <?php

    /* recipient */
    $to = "milieu@auburn.edu";

    //subject
    $subject = "AU Career Center Presentation Request";

    //message

    $message=

    "<b>The following information has been submitted for a presentation. If you are not contacted by someone in the Career Center office within 2 business days, please call 334.844.4744 to confirm your request.</b>
    <p>
    <b>Topic Requested/Title:</b> $topic<br>
    <b>Program Type:</b> $type<br>
    <b>Date:</b> $date<br>
    <b>Day of the week:</b> $day<br>
    <b>Start time:</b> $start_time<br>
    <b>End time:</b> $end_time<br>
    <b>Location:</b> $location<br>
    <b>Description:</b> $description<br>
    <b>Organization/Course # - Section #:</b> $course | Section $section <br>
    <b>Expected Attendance:</b> $attendance <br>
    <b>Contact:</b> $contact<br>
    <b>Email:</b> $pemail<br>
    <b>Phone:</b> $poffice<br>
    <b>Cell:</b> $pcell<br>
    <b>Secondary Contact:</b> $secondary<br>
    <b>Email:</b> $semail<br>
    <b>Phone:</b> $soffice<br>
    <b>Cell:</b> $scell<br>



    ";

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Additional headers
    $headers .= 'From: AU Career Center <careers@auburn.edu>' . "\r\n";


    mail($to, $subject, $message, $headers);


   ?>
       
       
  <?php

    /* recipient */
    $to = "milieu@javakat.io";

    //subject
    $subject = "Career Center Presentation Request Form";

    //message

    $message=

    "<center><b>Career Center Presentation Request Form</b></center>
    <p>
    <b>Topic Requested/Title:</b> $topic<br>
    <b>Program Type:</b> $type<br>
    <b>Date:</b> $date<br>
    <b>Day of the week:</b> $day<br>
    <b>Start time:</b> $start_time<br>
    <b>End time:</b> $end_time<br>
    <b>Location:</b> $location<br>
    <b>Internet:</b> $internet<br>
    <b>Description:</b> $description<br>
    <b>Organization/Course # - Section #:</b> $course | Section $section <br>
    <b>Expected Attendance:</b> $attendance <br>
    <b>Contact:</b> $contact<br>
    <b>Email:</b> $email<br>
    <b>Phone:</b> $office<br>
    <b>Cell:</b> $cell<br>
    <b>Secondary Contact:</b> $secondary<br>
    <b>Email:</b> $secondary_email<br>
    <b>Phone:</b> $secondary_office<br>
    <b>Cell:</b> $secondary_cell<br>";

    // To send HTML mail, the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Additional headers
    $headers .= 'From: Career Services <careers@auburn.edu>' . "\r\n";

    mail($to, $subject, $message, $headers);
   ?>       
              
</p>
<p>Your request for a presentation has been submitted.</p>
<p>You will be contacted to confirm your request and to learn more about the presenation. </p>
      <div class="row footer-wrap hidden-print">
  <footer>
    <section>
      <ul>
        <li><a href="http://www.auburn.edu/academicsupport">Academic Support Services</a></li>
        <li><a href="http://www.auburn.edu/fye">First Year Experience</a></li>
        <li><a href="http://harbert.auburn.edu/students/current/professional-and-career-development-resources/index.php">College of Business OPCD</a></li>
      </ul>
    </section>

    <section>
      <ul>
        <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/">Office of Undergraduate Studies</a></li>
        <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/academicadvising.html">Academic Advisors</a></li>
        <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/majors/">Majors/Academic Departments</a></li>
      </ul>
    </section>
  </footer>

  <div class="subfooter" role="contentinfo">
    <div>
      <span>Auburn University</span>&sdot;
      <span>Auburn, Alabama 36849</span>&sdot;
      <span>(334) 844-4000</span>&sdot;
      <span>
        <script type="text/javascript">
          emailE='auburn.edu';
          emailE=('webmaster' + '@' + emailE);
          document.write("<a href='mailto:" + emailE + "'>" + emailE + "</a>");
        </script>
      </span>
    </div>

    <div>
      <span><a href="http://www.auburn.edu/websitefeedback/">Website Feedback</a></span>&sdot;
      <span><a href="http://www.auburn.edu/privacy/">Privacy</a></span>&sdot;
      <span><a href="http://www.auburn.edu/oit/it_policies/copyright_regulations.php">Copyright &copy; <script type="text/javascript">date = new Date(); document.write(date.getFullYear());</script></a></span>
    </div>
  </div>
</div>
    </div>

    <div class="to-top" style="display:none;"><a href="#top"></a></div>

    <!-- jQuery, Bootstrap, and Default AU Code JavaScript --> 
    <script src="//cdn.auburn.edu/assets/js/default.min.js"></script>
    <script>
      var nav = responsiveNav('.nav-collapse', {
        label: '' 
      });
    </script>
  </body>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-12338791-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</html>