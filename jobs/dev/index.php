<!doctype html>
<html lang="en" ng-app="career-center-jobs">
    <head>
        <!-- Meta Data -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>Tiger Recruiting Link</title>
        
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
        <script src="components/angular/angular.js"></script>
        <script src="assets/js/controllers.js"></script>
    </head>

    <body class="jobs">
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
                            <li><a href="http://www.auburn.edu/career/students/">Career Center</a></li>
                            <li><a href="http://www.auburn.edu/career/alumni/">College of Business</a></li>
                        </ul>
                    </div>
                </div>
            </header>
            
            <div class="brow row">
                <div class="banner flex">
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
                    <div class="slider blanker">
                        <div class="block events blanker-wrap" ng-controller="calendar-ctrl">
                            <h2><a href="http://www.auburn.edu/career/events/">Upcoming Events</a></h2>
                            <ul>
                                <li class="event" ng-repeat="event in events">
                                    <div class="event-date">
                                        <div class="event-date-month">{{ event.date['shortened-month'] }}</div>
                                        <div class="event-date-day">{{ event.date['day'] }}</div>
                                    </div>
                                    <div class="event-details">
                                        <div class="event-details-name">{{ event.name }}</div>
                                        <div class="event-details-location">{{ event.location }}</div>
                                        <div class="event-details-time">{{ event.date.time.start}} - {{ event.date.time.end }}</div>
                                    </div>
                                </li>
                            </ul>
                            <a href="http://www.auburn.edu/career/events/">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <section class="milieu">
                    
                </section>
            </div>
    
            <div class="row flex">
                <div class="hero inbetween">
                    <h2 class="hero-text">Looking for more?</h2>
                </div>
                <!--mn: milieu-nav-->
                <div class="milieu-nav">
                    <div class="milieu-navbar accordion">
                        <label class="milieu-navbar-text accordion-header" for="accordion-chk">
                            Major archetype
                        </label>
                        <div class="accordion-arrow">
                        </div>
                        <input type=checkbox id="accordion-chk" class="accordion-chk">
                        <!-- probably use a model and ng-repeat for each valid entry -->
                        <div class="accordion-content">
                            <div class="accordion-element bar bar-grey">
                                Design
                            </div>
                            <div class="accordion-element bar bar-grey">
                                Engineering
                            </div>
                            <div class="accordion-element bar bar-grey">
                                Human Sciences
                            </div>
                        </div>
                    </div>
                    <div class="milieu-navbar">
                        <div class="milieu-navbar-text">
                            Particular major
                        </div>
                        <input type=text class="milieu-navbar-search filter" data-filterables={{ }}>
                    </div>
                    <div class="milieu-navbar">
                        <div class="milieu-navbar-text">
                            Interview prep
                        </div>
                    </div>
                    <div class="milieu-navbar">
                        <div class="milieu-navbar-text">
                            Job prep
                        </div>
                    </div>
                </div>
                <div class="jobs-widget">
                    <div id="symp_jobswidget" 
                         data-csm="auburn-csm.symplicity.com" 
                         data-id="cafc7f8b2e4d76da719080d5cc417823" 
                         data-size="auto"
                         data-css="https://auburn.edu/career/jobs/assets/stylesheets/widget.css"
                         data-logo=""
                         data-header-text="Part-Time Jobs"
                         data-sort-by="posting_date"></div>
                    <script>
                        (
                            function(d, s, id) {
                                
                                console.log('d: ')
                                console.log(d)
                                console.log('s: ')
                                console.log(s)
                                console.log('id: ')
                                console.log(id)
                                
                                var js
                                  , sjs = d.getElementsByTagName(s)[0]
                                
                                console.log('sjs: ')
                                console.log(sjs)
                                
                                if (d.getElementById(id)) return
                                js = d.createElement(s)
                                js.id = id
                                js.src = "https://static.symplicity.com/jslib/jobswidget/jobswidget.js"
                                sjs.parentNode.insertBefore(js, sjs)
                            }   
                            (document, "script", "symp_jobswidget_js")
                        )
                    
                    </script>
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
        
    </body>

<!--        old clay stuff
            <div class="row">
                <div class="inbetween flex">
                    <div class="between">
                        <img src="assets/images/jobs-handbook.png" alt="Interview Prep" />
                    </div>
                    <div class="between">
                        <img src="assets/images/jobs-interview.png" alt="Interview Prep" />
                    </div>
                    <div class="between">
                        <img src="assets/images/jobs-salary.png" alt="Interview Prep" />
                    </div>
                    <div class="between small-text">
                        <p>Your résumé will be reviewed in TRL by a staff member before it can be used in applications.</p>
                        <p>Résumé reviews take 1-2 business days from time of upload and are conducted M-F 7:45 am - 4:45 pm.</p>
                        <p>Please do not upload multiple copies of your résumé for review.</p>
                    </div>
                </div>
            </div>

            <div id="content" class="row row-offcanvas row-offcanvas-left content-area">
                <div class="content-division col-sm-6" role="part-time-jobs-widget">
                    <div id="symp_jobswidget" 
                         data-csm="auburn-csm.symplicity.com" 
                         data-id="cafc7f8b2e4d76da719080d5cc417823" 
                         data-size="auto" 
                         data-css="https://auburn-csm.symplicity.com/css/list_jobs_widget.css" 
                         data-logo="" 
                         data-header-text="Part-Time Jobs" 
                         data-width="250" 
                         data-height="480" 
                         data-sort-by="posting_date"></div> 
                    <script>
                        (function(d, s, id) {
                            var js, sjs = d.getElementsByTagName(s)[0];   
                            if (d.getElementById(id)) return;   
                            js = d.createElement(s); 
                            js.id = id;   
                            js.src = "https://static.symplicity.com/jslib/jobswidget/jobswidget.js";   
                            sjs.parentNode.insertBefore(js, sjs); 
                        }(document, "script", "symp_jobswidget_js"));
                    </script>
                </div>
                <div class="content-division col-sm-12" role="main">
                    <h2>This is <span class="path-title">Teaching <i class="fa fa-chevron-down"></i></span></h2>
                    <div class="modal-body">
                        <div class="career flex">
                            <div class="career-block">
                                <i class="fa fa-leaf"></i>
                                <h3 class="career-title">Agriculture</h3>
                            </div>
                            <div class="career-block">
                                <i class="fa fa-pencil"></i> 
                                <h3 class="career-title">Architecture, Design and Construction</h3>
                            </div>
                            <div class="career-block">
                                <i class="fa fa-briefcase"></i>
                                <h3 class="career-title">Business</h3>
                            </div>
                            <div class="career-block">
                                <i class="fa fa-book"></i>   
                                <h3 class="career-title">Education</h3>
                            </div>
                            <div class="career-block">
                                <i class="fa fa-wrench"></i>
                                <h3 class="career-title">Engineering</h3>
                            </div>
                            <div class="career-block">
                                <i class="fa fa-bug"></i>
                                <h3 class="career-title">Forestry and Wildlife Sciences</h3>
                            </div>
                            <div class="career-block">
                                <i class="fa fa-group"></i>
                                <h3 class="career-title">Human Sciences</h3>
                            </div>
                            <div class="career-block">
                                <i class="fa fa-globe"></i>
                                <h3 class="career-title">Liberal Arts</h3>
                            </div>
                            <div class="career-block">
                                <i class="fa fa-book"></i>
                                <h3 class="career-title">Library</h3>
                            </div>
                            <div class="career-block">
                                <i class="fa fa-user-md"></i>
                                <h3 class="career-title">Nursing</h3>
                            </div>
                            <div class="career-block">
                                <i class="fa fa-stethoscope"></i>
                                <h3 class="career-title">Pharmacy</h3>
                            </div>
                            <div class="career-block">
                                <i class="fa fa-flask"></i>
                                <h3 class="career-title">Sciences and Mathematics</h3>
                            </div>
                            <div class="career-block">
                                <i class="fa fa-medkit"></i>
                                <h3 class="career-title">Veterinary Medicine</h3>
                            </div>
                        </div>
                        <div class="path flex">
                            <div class="path-block">
                                Dramatically visualize customer directed convergence without revolutionary ROI.
                            </div>
                            <div class="path-block">
                                Dramatically maintain clicks-and-mortar solutions without functional solutions.
                            </div>
                            <div class="path-block">
                                Dynamically innovate resource-leveling customer service for state of the art customer service.
                            </div>
                            <div class="path-block">
                                Holisticly predominate extensible testing procedures for reliable supply chains.
                            </div>
                            <div class="path-block">
                                Dramatically engage top-line web services vis-a-vis cutting-edge deliverables.
                            </div>
                            <div class="path-block">
                                Quickly maximize timely deliverables for real-time schemas.
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
</html>