<!doctype html>
<html lang="en">
    <head>
        <!-- Meta Data -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>Auburn University Template</title>
        
        <!-- Bootstrap & Core CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
        <link href="//cdn.auburn.edu/assets/css/default.min.css" rel="stylesheet">
        
        <!-- Site/Application CSS -->
        <link href="assets/css/application.css" rel="stylesheet">
        <style type="text/css">
        </style>
        
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
    </head>

    <body>
        <!-- Container -->
        <div class="container">
            <div id="top" class="row header-wrap">
                <a href="#nav-section" class="skip">Skip to Navigation</a>
                
                <header role="banner">
                    <div class="logo hidden-print" onclick="window.location='http://www.auburn.edu'" title="AU Homepage" aria-label="Auburn University Homepage">
                        <img src="//cdn.auburn.edu/assets/img/header-logo.png" alt="Auburn University Homepage" height="75" width="203">
                    </div>
                    <div class="menu-icon hidden-print" data-toggle="offcanvas">
                        <i class="icon-reorder"></i>
                    </div>
                    <div class="search-icon hidden-print">
                        <i class="icon-search"></i>
                    </div>
                    
                    <div class="header-title">
                        <div class="top-links hidden-print">
                            <a href="http://www.auburn.edu/main/sitemap.php">A-Z Index</a> | <a href="http://www.auburn.edu/map">Map</a> | <a href="http://www.auburn.edu/main/auweb_campus_directory.html" class="lastTopLink">People Finder</a>
                        </div>
                        
                        <form action="http://search.auburn.edu" class="search-form form-group hidden-print" method="get">
                            <div class="search-box">
                                <input type="text" name="q" id="q" role="search" accesskey="q" tabindex="1" class="search-field form-control" placeholder="Search AU..." value="">
                            </div>
                            <input type="hidden" name="cx" value="006456623919840955604:pinevfah6qm">
                            <input type="hidden" name="ie" value="utf-8">
                            <label for="q" class="form-control" style=" position:absolute; left:-9999px; visibility:hidden;">Enter your search terms</label>
                        </form>
                        
                        <div class="title-area">
                            <img class="visible-print" src="//cdn.auburn.edu/assets/img/header-logo-print.png" height="48" width="245" alt="Auburn University Logo">
                            <div class="main-heading hidden-print">
                                <a href="http://www.auburn.edu/template/2013">Official AU Template Website</a>
                            </div>
                            <div class="sub-heading hidden-print">
                                <a href="http://www.auburn.edu/oit">Office of Information Technology</a>
                            </div>
                        </div>
                    </div>
                </header>
                
                <a href="#content" class="skip">Skip to Main Content</a>
                
                <nav id="nav-section" class="navbar hidden-print" role="navigation">
                    <div class="navbar-brand collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse">Main Navigation<span>&nbsp;</span></div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="http://www.auburn.edu/main/currentstudents.html">Students</a></li>
                        <li><a href="http://www.auburn.edu/main/prospectivestudents.html">Future Students</a></li>
                        <li><a href="http://www.auburn.edu/main/employees.html">Employees</a></li>
                        <li><a href="http://www.aualum.org/">Alumni</a></li>
                        <li><a href="http://www.auburn.edu/main/parents.html">Parents</a></li>
                        <li><a href="http://www.auburntigers.com/">Athletics</a></li>
                    </ul>
                    </div>
                </nav>
            </div>
            
            <div id="content" class="row row-offcanvas row-offcanvas-left content-area">
                <div id="sidebar" class="hidden-print col-sm-3 sidebar sidebar-offcanvas">
                    <div class="sidebar-content accordion"></div>
                </div>
        
                <div class="content-division col-sm-9" role="main">
                    <!-- Content -->
                    @yield('content')
                </div>
            </div>
            
            <div class="row footer-wrap hidden-print">
                <footer>
                    <section>
                        <ul>
                            <li><a href="http://www.aaes.auburn.edu/">Alabama Agricultural Experiment Station</a></li>
                            <li><a href="http://www.aces.edu/">Alabama Cooperative Extension System</a></li>
                            <li><a href="http://www.aum.edu/">Auburn University at Montgomery</a></li>
                            <li><a href="http://www.auburn.edu/emergency/">Campus Safety/Emergency Preparedness</a></li>
                        </ul>
                    </section>
                    
                    <section>
                        <p class="social">
                            <a href="http://www.facebook.com/auburnu/" class="facebook social" target="_blank"></a> 
                            <a href="http://itunes.auburn.edu/" class="itunes social" target="_blank"></a> 
                            <a href="http://twitter.com/auburnu/" class="twitter social" target="_blank"></a> 
                            <a href="https://www.google.com/+AuburnUniversity/" class="google-plus social" target="_blank"></a> 
                            <a href="http://www.youtube.com/AuburnUniversity/" class="you-tube social" target="_blank"></a> 
                            <a href="http://family.auburn.edu/" class="au-family social" target="_blank"></a> 
                            <a href="http://www.secacademicnetwork.com/" class="sec social" target="_blank"></a> 
                        </p>
                        <p class="social-details" style="background-position: 0px -177px;"></p>
                    </section>
                    
                    <section>
                        <p>
                            <a href="http://www.auburn.edu/arra/" class="arra-image" title="American Recovery and Reinvestment Act"></a>
                            <a href="http://www.auburn.edu/arra/">American Recovery &amp;<br>
                    Reinvestment Act</a>
                        </p>
                    </section>
                </footer>
                
                <div class="subfooter" role="contentinfo">
                    <p>
                        <span>Auburn University |</span> 
                        <span>Auburn, Alabama 36849 |</span> 
                        <span>(334) 844-4000  |</span> 
                        <span><script type="text/javascript">emailE='auburn.edu'; emailE=('webmaster' + '@' + emailE); document.write("<a href='mailto:" + emailE + "'>" + emailE + "</a>");</script></span>
                    </p>
                    
                    <p>
                        <span><a href="http://www.auburn.edu/websitefeedback/">Website Feedback</a> |</span> 
                        <span><a href="http://www.auburn.edu/privacy/">Privacy</a> |</span> 
                        <span><a href="http://www.auburn.edu/oit/it_policies/copyright_regulations.php">Copyright &copy; <script type="text/javascript">date = new Date(); document.write(date.getFullYear());</script></a></span>
                    </p>
                </div>
            </div>
        </div>
        
        <div class="to-top" style="display:none;"><a href="#top"></a></div>
        
        <!-- jQuery, Bootstrap, and Default AU Code JavaScript --> 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> 
        <script src="//cdn.auburn.edu/assets/js/default.min.js"></script> <!-- Site/Application JavaScript -->
        <script src="assets/js/application.js"></script>
    </body>
</html>