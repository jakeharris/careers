<!doctype html>
<html lang="en">
    <head>
        <!-- Meta Data -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>@yield('title')</title>
        
        <!-- Bootstrap & Core CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
        <link href="//cdn.auburn.edu/assets/css/default.min.css" rel="stylesheet">
        
        <!-- Application CSS -->
        <?= stylesheet_link_tag() ?>
        
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
        @yield('head')
    </head>

    <body>
        <!-- Container -->
        <div class="container">
            <header role="banner" class="flex">
                <a class="header-logo" href="http://www.auburn.edu">
                    <img src="//cdn.auburn.edu/assets/img/header-logo.png" alt="Auburn University Homepage" height="75" width="203">
                </a>
                
                <div class="header-navbar">
                    @yield('navbar')
                </div>
                
                <div class="header-title">
                    @yield('mainHeading')
                    @yield('subHeading')
                </div>
            </header>
            
            <div class="row">
                <div class="banner flex">
                    @yield('banner')
                </div>
            </div>

            <div id="content" class="row row-offcanvas row-offcanvas-left content-area">
                <div class="content-division col-sm-12" role="main">
                    @yield('body')
                </div>
            </div>
            
            <div class="row footer-wrap hidden-print">
                <footer>
                    @section('footer')
                    <section>
                        <ul>
                            <li><a href="http://www.auburn.edu/academicsupport">Academic Support Services</a></li>
                            <li><a href="http://www.auburn.edu/fye">First Year Experience</a></li>
                            <li><a href="http://business.auburn.edu/student-services/office-of-professional-career-development/">College of Business OPCD</a></li>
                        </ul>
                    </section>
                    
                    <section> 
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
                                <a href="http://www.youtube.com/user/AUCDS/featured">
                                    <i class="fa fa-youtube footer-icon"></i>
                                </a>
                                <a href="http://tigersprepare.blogspot.com/">
                                    <i class="fa fa-blogger footer-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </section>
                    
                    <section>
                        <ul>
                            <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/">Office of Undergraduate Studies</a></li>
                            <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/academicadvising.html">Academic Advisors</a></li>
                            <li><a href="http://www.auburn.edu/academic/provost/undergrad_studies/majors/">Majors/Academic Departments</a></li>
                        </ul>
                    </section>
                    @show
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
        <?= javascript_include_tag() ?>
    </body>
</html>