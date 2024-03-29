

<!doctype html>
<html lang="en" ng-app="">
  <head>
    <base href="../">
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="cache-control" content="no-cache" />
    <title>eResume Submitted | Career Center</title>

    <!-- Bootstrap & Core CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link href="//cdn.auburn.edu/assets/css/default.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/jquery.gray/1.3.6/gray.min.css">
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>

    <!-- Application CSS -->
    <!-- build:css assets/styles/eresume-submission.min.css -->
      <link rel=stylesheet href="assets/styles/presentations.css">
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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
    
    <!-- Application-specific CSS/JS -->
    <!-- build:js assets/scripts/eresume-submission.min.js -->
      <script src="assets/scripts/presentations.js"></script>
      
    <!-- endbuild -->
    
  </head>

  <body class="eresume-submission">
    <header role="banner">

  <div class="preheader" id="preheader">
    <div class="hexes">
      <div class="hex"><a href="http://auburn.edu"><img src="assets/images/AU-emblem.png"></a></div>
    </div>
    <h1><a href=".">Career Center</a></h1>
  </div>
  
  
  <nav id="nav" class="header nav-collapse">
    <div class="nav-controller" id="hamburger">
      <i class="icon-navicon"></i>
    </div>
    <div class="nav-wrapper">
      <ul>
        <li id="about-us" class="hover about-us about-us--mobile">
          <a href="aboutus/">About Us</a>
          <ul>
            <li data-menu="about-us"><a href="aboutus/">Office Info</a></li>
            <li data-menu="about-us"><a href="aboutus/staff.html">Staff</a></li>
            <li data-menu="about-us"><a href="aboutus/plan-your-visit.html">Plan Your Visit</a></li>
            <li data-menu="about-us"><a href="aboutus/campus-partners.html">Campus Partners</a></li>
          </ul>
        </li>
        <li id="students" class="hover">
          <a href="students/">Students</a>
          <ul>
            <li data-menu="students"><a href="students/">Undergraduate</a></li>
            <li data-menu="students"><a href="students/graduate.html">Graduate</a></li>
            <li data-menu="students"><a href="students/alumni.html">Alumni</a></li>
            <li data-menu="students"><a href="students/prospective.html">Prospective</a></li>
            <li data-menu="students"><a href="students/specialized.html">Specialized Advice</a></li>
          </ul>
        </li>
        <li>
          <a href="parents/">Families</a>
        </li>
        <li>
          <a href="faculty/">Faculty</a>
        </li>
        <li>
          <a href="employers/">Employers</a>
        </li>
        <li>
          <a href="events/">Events</a>
        </li>
        <li class="about-us">
          <a href="aboutus/">About Us</a>
          <ul>
            <li data-menu="about-us"><a href="aboutus/">Office Info</a></li>
            <li data-menu="about-us"><a href="aboutus/staff.html">Staff</a></li>
            <li data-menu="about-us"><a href="aboutus/plan-your-visit.html">Plan Your Visit</a></li>
            <li data-menu="about-us"><a href="aboutus/campus-partners.html">Campus Partners</a></li>
          </ul>
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
    
    
    if(nav.children[1].classList.contains('mobile-nav--active') && !nav.classList.contains('fixed')) {
      nav.classList.add('fixed'); 
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
    
    if (hamburger.classList.contains('nav-controller--active'))
      hamburger.classList.remove('nav-controller--active')
    else hamburger.classList.add('nav-controller--active')
    
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
  
  var submenus = document.getElementById('nav').getElementsByClassName('hover')
  function touchHandler(e) {
    
    e.preventDefault()
    
    console.log(this.classList)
    
    if(this.classList.contains('hover')) {
      if(this.classList.contains('hover--active')) {
        this.classList.add('hover--active')
      }
    }
    else if(!this.classList.contains('hover')) {

      console.log('no hover')
      console.log(this)
      var menu = this.parentElement.parentElement

      if(menu.classList.contains('hover--active')) e.target.click()
    }
  }
  for(var i = 0; i < submenus.length; i++) {
    submenus[i].addEventListener('touchstart', touchHandler, true)
    
    for(var j = 0; j < submenus[i].children[1].children.length; j++) {
      submenus[i].children[1].children[j].addEventListener('touchstart', touchHandler, true) 
    }
  }
  
</script>
    <div class="container">
      
<section class="content">  
  <p>
    <?php
      // Email settings
      $target      = "Jake
      $email       = "milieu@javakat.io";
      $to          = "$target <$email>";
      $from        = "eResume Automail Service";
      $subject     = "[eResume] $name";
      $mainMessage = "NAME:\n$name\n\nLOOKING TO FILL ROLE:\n$job";
      $headers     = "From: $from";

      // File settings
      $MAX_FILE_SIZE = 1024; // KB
      $ALLOWED_EXTENSIONS = array('doc', 'docx', 'pdf');
      $UPLOAD_DIR = 'tmp/'

      // File validation
      $filename =
          basename($_FILES['resume']['name']);
      $filetype =
          substr($filename,
          strrpos($filename, '.') + 1);
      $filesize =
          $_FILES['resume']['size'] / 1024;   //size in KBs
      
      if($filesize > $MAX_FILE_SIZE) {
        $errors .= '\n Size of uploaded file must be smaller than $MAX_FILE_SIZE KB.'
      }
      for($i = 0; $i < sizeof($ALLOWED_EXTENSIONS); $i++) {
        if(strcasecmp($ALLOWED_EXTENSIONS[$i], $filetype) == 0) {
          $allowedtype = true;
        }
      }
      if(!$allowedtype) {
        errors .= '\n Invalid file type. Accepted file types are: ' 
                . implode('\n\t', $ALLOWED_EXTENSIONS);
      }
      
      $filename = $UPLOAD_DIR . $filename;
      move_uploaded_file($_FILES['resume']['tmp_name'], $filename);

      $file = fopen($fileatt,'rb'); 
      $data = fread($file,filesize($filename)); 
      fclose($file); 
      $semi_rand = md5(time()); 
      $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
      $headers .= "\nMIME-Version: 1.0\n" 
                . "Content-Type: multipart/mixed;\n" 
                . " boundary=\"{$mime_boundary}\""; 
      $msg .= "This is a multi-part message in MIME format.\n\n"
            . "--{$mime_boundary}\n" 
            . "Content-Type:text/html; charset=\"iso-8859-1\"\n" 
            . "Content-Transfer-Encoding: 7bit\n\n" 
            . $mainMessage . "\n\n"; 
      $data = chunk_split(base64_encode($data)); 
      $msg .= "--{$mime_boundary}\n" 
            . "Content-Type: {$fileatt_type};\n" 
            . " name=\"{$fileatt_name}\"\n" 
            . //"Content-Disposition: attachment;\n" 
            . //" filename=\"{$fileatt_name}\"\n" 
            . "Content-Transfer-Encoding: base64\n\n" 
            . $data . "\n\n" 
            . "--{$mime_boundary}--\n";   
      $ok = mail($to, $subject, $msg, $headers);

      // Send the email
      if($ok) {
          echo "The email was sent.";
      }
      else {
          echo "There was an error sending the mail.";
          echo $errors;
      }
      unlink($resume);
    ?>

  </p>
  <p>Your eResume has been submitted.</p>
</section>
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
      <span>(334) 844-4744</span>&sdot;
      <span>
        <script type="text/javascript">
          emailE='auburn.edu';
          emailE=('aucc' + '@' + emailE);
          document.write("<a href='mailto:" + emailE + "'>" + emailE + "</a>");
        </script>
      </span>
    </div>

    <div>
      <span><a href="http://www.auburn.edu/websitefeedback/">Website Feedback</a></span>&sdot;
      <span><a href="http://www.auburn.edu/privacy/">Privacy</a></span>&sdot;
      <span><a href="http://www.auburn.edu/oit/it_policies/copyright_regulations.php">Copyright &copy; <script type="text/javascript">date = new Date(); document.write(date.getFullYear());</script></a></span>&sdot;
      <span><a href="https://sites.auburn.edu/academic/provost/us/CareerCenter/SitePages/Home.aspx">Staff Intranet</a></span>
    </div>
  </div>
</div>
    </div>

    <div class="to-top" style="display:none;"><a href="#top"></a></div>

    <!-- jQuery, Bootstrap, and Default AU Code JavaScript --> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> 
    <script src="//cdn.auburn.edu/assets/js/default.min.js"></script>
    
    
    <script>
      $(function() {
        $('.hover').bind('touchstart', function(e) {
          e.preventDefault()
          $(this).toggleClass('hover--active')
        })
      })
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
