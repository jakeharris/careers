<!doctype html>
<html lang="en">
    <head>
        <!-- Meta Data -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>Career Center</title>
        
        <!-- Bootstrap & Core CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <link href="//cdn.auburn.edu/assets/css/default.min.css" rel="stylesheet">
        
        <!-- Application CSS -->
        <link rel=stylesheet href="assets/stylesheets/app.css">
        
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
        
        <!-- Application-specific CSS/JS -->
        
    </head>

    <body class="{{ $action }}">
        <!-- Container -->
        <div class="container">
            <header role="banner" class="flex">
                <a class="header-logo" href="http://www.auburn.edu">
                    <img src="//cdn.auburn.edu/assets/img/header-logo.png" alt="Auburn University Homepage" height="75" width="203">
                </a>
                
                <div class="header-right flex">                
                    <div class="header-title">
                        <a href="/">Career Center</a>
                        
                    </div>
                    
                    <div class="header-navbar">
                            <ul>
                                <li><a href="http://www.auburn.edu/career/students/">Students</a></li>
                                <li><a href="http://www.auburn.edu/career/alumni/">Alumni</a></li>
                                <li><a href="http://www.auburn.edu/career/parents/">Family</a></li>
                                <li><a href="http://www.auburn.edu/career/faculty/">Faculty</a></li>
                                <li><a href="http://hire.auburn.edu">Employers</a></li>
                            </ul>
                    </div>
                </div>
            </header>
            
            <div class="brow row">
                <div class="banner flex">
                    <!--    <img class="slider" src="assets/major.png">-->
                    <form class="slider login" method="post" action="https://auburn-csm.symplicity.com/students/index.php">
                        <div class="login-wrap">
                            <h2 class="login-title">Sign in to <a href="http://jobs.auburn.edu" class="trl"></a></h2>
                            <p class="login-description">Your link to jobs, interviews and employers.</p>
                            <div class="input-group login-username">
                                <span class="input-group-addon input-group-addon-md"><i class="fa fa-user"></i></span>
                                <input type="text" name="username" class="form-control input-md" placeholder="Student Username">
                            </div>
                            <div class="input-group login-password">
                                <span class="input-group-addon input-group-addon-md"><i class="fa fa-lock"></i></span>
                                <input type="password" name="password" class="form-control input-md" placeholder="Password">
                            </div>
                            <div class="flex flex--login">
                                <a href="http://www.auburn.edu/academic/provost/undergrad_studies/career/jobs/trl.html" class="btn btn-default btn-md login-button">Sign up</a>
                                <button type="submit" class="btn btn-default btn-md login-button login-button--active">Sign in</button>
                            </div>
                        </div>
                    </form>
                    <iframe class="slider" src="//player.vimeo.com/video/79522828" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <!--    <img class="slider" src="assets/using.png">-->
                <!--
                    <div class="slider">
                        <div class="slider-mask">
                            <ul class="slider-list">
                                <li class="slider-list-item">
                                    <a href="#">
                                        <img src="assets/major.png">
                                    </a>
                                </li>

                                <li class="slider-list-item">
                                    <a href="#">
                                        <img src="assets/using.png">
                                    </a>
                                </li>

                                <li class="slider-list-item">
                                    <a href="#">
                                        <img src="assets/eng.png">
                                    </a>
                                </li>

                                <li class="slider-list-item">
                                    <a href="#">
                                        <img src="assets/vimeo.png">
                                    </a>
                                </li>

                                <li class="slider-list-item">
                                    <a href="#">
                                        <img src="assets/eng.png">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                -->
                <!--
                    <div class="slider">
                        <div class="slider-mask">
                            <ul class="slider-list">
                                <li class="slider-list-item">
                                    <a href="#">
                                        <img src="assets/eng.png">
                                    </a>
                                </li>

                                <li class="slider-list-item">
                                    <a href="#">
                                        <img src="assets/vimeo.png">
                                    </a>
                                </li>

                                <li class="slider-list-item">
                                    <a href="#">
                                        <img src="assets/major.png">
                                    </a>
                                </li>

                                <li class="slider-list-item">
                                    <a href="#">
                                        <img src="assets/using.png">
                                    </a>
                                </li>

                                <li class="slider-list-item">
                                    <a href="#">
                                        <img src="assets/vimeo.png">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                -->
                </div>
            </div>
            
            <div class="row">
                <div class="inbetween flex">
                    
                </div>
            </div>

            <div id="content" class="row row-offcanvas row-offcanvas-left content-area">
                <div class="content-division col-sm-12" role="main">
                    <div class="flex">
                        <div class="block hours">
                            <h2><a href="http://www.auburn.edu/career/aboutus/">About Our Office</a></h2>
                            <div class="place">
                                <a href="http://auburn.edu/map/?id=76" class="place-icon">
                                    <i class="fa fa-map-marker"></i>
                                </a>
                                <a href="http://auburn.edu/map/?id=76" class="place-address">
                                    <address>
                                        303 Mary Martin Hall<br>
                                        Auburn, AL 36849
                                    </address>
                                </a>
                            </div>
                            <div class="times">
                                <i class="fa fa-clock-o times-icon"></i>
                                <div class="times-address">
                                    Visit us! We’re open Monday through Friday. Walk-ins are 15 minute sessions (from noon to 4 pm) for résumé, cover letters and basic job search questions. If you prefer an appointment, call <a href="tel:3348444744">(334) 844-4744</a>.
                                </div>
                            </div>
                            <i class="fa fa-briefcase block-bg hours-bg"></i>
                        </div>

                        <div class="block events">
                            <h2><a href="http://www.auburn.edu/career/events/">Upcoming Events</a></h2>
                            <ul>
                                <li class="event">
                                    <div class="event-date">
                                        <div class="event-date-month">FEB</div>
                                        <div class="event-date-day">11</div>
                                    </div>
                                    <div class="event-details">
                                        <div class="event-details-name">Engineering &amp; Technical Career Expo</div>
                                        <div class="event-details-location">The Hotel at Auburn University and Dixon Conference Center</div>
                                        <div class="event-details-time">3 PM - 7 PM</div>
                                    </div>
                                </li>
                                <li class="event">
                                    <div class="event-date">
                                        <div class="event-date-month">FEB</div>
                                        <div class="event-date-day">17</div>
                                    </div>
                                    <div class="event-details">
                                        <div class="event-details-name">Using Your Major | Panel Discussion | Government</div>
                                        <div class="event-details-location">Student Center, Room 2107</div>
                                        <div class="event-details-time">12 PM - 1 PM</div>
                                    </div>
                                </li>
                            </ul>
                            <i class="fa fa-calendar block-bg events-bg"></i>
                        </div>

                        <div class="block blog">
                            <h2><a href="http://tigersprepare.blogspot.com">Our Blog</a></h2>
                            <h3><?php echo $blog["title"]; ?></h3>
                            <div><?php echo $blog["body"]; ?></div>
                            <i class="fa fa-edit block-bg blog-bg"></i>
                        </div>

                        <div class="block social">
                            <h2><a href="#">Connect With Us</a></h2>
                            <ul>
                                <li>
                                    <a href="http://www.facebook.com/AUCareer">
                                        <i class="fa fa-facebook social-icon"></i>
                                    </a>
                                    <a href="http://twitter.com/AUCareer">
                                        <i class="fa fa-twitter social-icon"></i>
                                    </a>
                                    <a href="http://www.linkedin.com/groups?about=&amp;gid=1878262">
                                        <i class="fa fa-linkedin social-icon"></i>
                                    </a>
                                    <a href="http://www.pinterest.com/aucareer/">
                                        <i class="fa fa-pinterest social-icon"></i>
                                    </a>
                                    <a href="https://vimeo.com/aucareer">
                                        <i class="fa fa-vimeo-square social-icon"></i>
                                    </a>
                                    <a href="http://tigersprepare.blogspot.com/">
                                        <i class="fa fa-blogger social-icon"></i>
                                    </a>
                                </li>
                            </ul>
                            <i class="fa fa-group block-bg social-bg"></i>
                        </div>

                        <div class="block tweets">
                            <h2><a href="https://twitter.com/aucareer">@AUCareer</a></h2>
                            <div class="tweets-text" data-twitter=""><?php echo $tweet; ?></div>
                            <i class="fa fa-twitter block-bg tweets-bg"></i>
                        </div>

                        <div class="block sponsors">
                            <h2><a href="#">Sponsors</a></h2>
                            <a class="ad" href="http://www.nxtbook.com/nxtbooks/nace/JobChoices0812/index.php">
                                <img class="ad-image" src="assets/images/ussteel.jpg">
                            </a>
                            <i class="fa fa-certificate block-bg sponsors-bg"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="banner banner-bottom flex">
                    <img class="slider" src="assets/images/expo.jpg">
                    <img class="slider" src="assets/images/education.jpg">
                    <img class="slider" src="assets/images/major.png"> 
                </div>
            </div>
            
            <div class="row footer-wrap hidden-print">
                <footer>
                    <section>
                        <ul>
                            <li><a href="http://www.auburn.edu/academicsupport">Academic Support Services</a></li>
                            <li><a href="http://www.auburn.edu/fye">First Year Experience</a></li>
                            <li><a href="http://business.auburn.edu/student-services/office-of-professional-career-development/">College of Business OPCD</a></li>
                        </ul>
                    </section>
                    
                    <section>
                        <img class="outforwork" src="assets/images/outforwork.png">
<!--
                        <ul>
                            <li>
                                <a href="http://www.facebook.com/AUCareer">
                                    <i class="fa fa-facebook footer-icon"></i>
                                </a>
                                <a href="http://twitter.com/AUCareer">
                                    <i class="fa fa-twitter footer-icon"></i>
                                </a>
                                <a href="http://www.linkedin.com/groups?about=&amp;gid=1878262">
                                    <i class="fa fa-linkedin footer-icon"></i>
                                </a>
                                <a href="http://www.pinterest.com/aucareer/">
                                    <i class="fa fa-pinterest footer-icon"></i>
                                </a>
                                <a href="https://vimeo.com/aucareer">
                                    <i class="fa fa-vimeo-square footer-icon"></i>
                                </a>
                                <a href="http://tigersprepare.blogspot.com/">
                                    <i class="fa fa-blogger footer-icon"></i>
                                </a>
                            </li>
                        </ul>
-->
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
                           <span>Auburn University</span>&sdot;<!--
                        --><span>Auburn, Alabama 36849</span>&sdot;<!--
                        --><span>(334) 844-4000</span>&sdot;<!--
                        --><span><!--
                                --><script type="text/javascript">
                                    emailE='auburn.edu';
                                    emailE=('webmaster' + '@' + emailE);
                                    document.write("<a href='mailto:" + emailE + "'>" + emailE + "</a>");
                                </script>
                           </span>
                    </div>
                    
                    <div>
                        <span><a href="http://www.auburn.edu/websitefeedback/">Website Feedback</a></span>&sdot;<!-- 
                        --><span><a href="http://www.auburn.edu/privacy/">Privacy</a></span>&sdot;<!--
                        --><span><a href="http://www.auburn.edu/oit/it_policies/copyright_regulations.php">Copyright &copy; <script type="text/javascript">date = new Date(); document.write(date.getFullYear());</script></a></span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="to-top" style="display:none;"><a href="#top"></a></div>
        
        <!-- jQuery, Bootstrap, and Default AU Code JavaScript --> 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> 
        <script src="//cdn.auburn.edu/assets/js/default.min.js"></script>
        
        <!-- Application JavaScript -->
        
        <script type="text/javascript">
            $(document).ready(function () {
                $.ajax({
                    url: "http://vimeo.com/api/v2/aucareer/videos.json",
                    type: "GET"
                }).success(function(data) {
                    $("iframe.slider").attr("src", "//player.vimeo.com/video/" + data[0].id);
                });
            });
        </script>
    </body>
</html>
