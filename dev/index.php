<!doctype html>
<html lang="en" ng-app="career-center-home">
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
        <script src="components/angular/angular.js"></script>
        <script src="js/controllers.js"></script>
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
                        <a href="./">Career Center</a>
                        
                    </div>
                    
                    <div class="header-navbar">
                            <ul>
                                <li><a href="http://www.auburn.edu/career/students/">Students</a></li>
                                <li><a href="http://www.auburn.edu/career/alumni/">Alumni</a></li>
                                <li><a href="http://www.auburn.edu/career/parents/">Families</a></li>
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
                                    Visit us! We’re open Monday through Friday (from 8am to 4pm). Walk-ins are 15 minute sessions (from noon to 4 pm) for résumé, cover letters and basic job search questions. If you prefer an appointment, call <a href="tel:3348444744">(334) 844-4744</a>.
                                </div>
                            </div>
                            <i class="fa fa-briefcase block-bg hours-bg"></i>
                        </div>

                        <div class="block events" ng-controller="calendar-ctrl">
                            <h2><a href="http://www.auburn.edu/career/events/">Upcoming Events</a></h2>
                            <ul>
                                <li class="event" ng-repeat="event in events">
                                    <div class="event-date">
                                        <div class="event-date-month">{{ event.date['shortened-month'] }}</div>
                                        <div class="event-date-day">{{ event.date['day'] }}</div>
                                    </div>
                                    <div class="event-details">
                                        <div class="event-details-name">{{ event.name }}</a></div>
                                        <div class="event-details-location">{{ event.location }}</div>
                                        <div class="event-details-time">{{ event.date.time.start}} - {{ event.date.time.end }}</div>
                                    </div>
                                </li>
                            </ul>
                            <a href="http://www.auburn.edu/career/events/">Read more</a>
                            <i class="fa fa-calendar block-bg events-bg"></i>
                        </div>
<?php $blog["title"] = "The long road home"; $blog["body"] = "Some days take longer than others. Sure, it's all twenty-four hours, but somewhere along the line, they get longer or shorter. The sun changes cycle. Your body changes sleep habits. So much can make this vary, and take you to the dreaming ether sooner or later than expected. 

<br /><br />

I've been travelling for half a year now, and the somber sunrises are gracious Ra's prevention of solace and slumber's embrace. It's so hard to stay awake as a trucker. You get used to the way the tires bump along, even with the irregularities, the occasional tire fragments or rabbits you hit along the way."

?>
                        <!--  <br /><br />

So I make a habit of mythos..." I create stories to keep myself awake, and I tell them to other truckers over the otherwise desolate HAM radio. They don't all get to hear the endings, because their paths deviate from my own. But while they were waiting for the ending, they stayed awake, feet fumbling to find the brake pedals in case something went awry. They might not have paid as much attention to the road as they should have, but it was more than they would have had it been silent, had they been dozing. 


<br /><br />
So I guess I was doing a civil service. But really, it was all selfish."; 

She was broken for days, years. 
The dawn had faded, the trees and leaves made gentle cracking sounds when the wind blew, and her kneecaps were gone.

The goddess of lux-->
                        <div class="block blog" ng-controller="blogger-ctrl">
                            <h2><a href="http://tigersprepare.blogspot.com" target="_blank">Tigers Prepare Blog</a></h2>
                            <h3><a class="h3-a blog-title" href="{{ blog.items[0].url }}">{{ blog.items[0].title }}</a></h3>
                            <div>{{ blog.sanitized.post }}</div>
                            <div class="blog-readmore"><a href="{{ blog.items[0].url }}">Read more</a></div>
                            <i class="fa fa-edit block-bg blog-bg"></i>
                        </div>

                        <div class="block social">
                            <h2><a href="#">Connect With Us</a></h2>
                            <ul>
                                <li>
                                    <a href="http://www.facebook.com/AUCareer" target="_blank">
                                        <i class="fa fa-facebook social-icon"></i>
                                    </a>
                                    <a href="http://twitter.com/AUCareer" target="_blank">
                                        <i class="fa fa-twitter social-icon"></i>
                                    </a>
                                    <a href="http://www.linkedin.com/groups?about=&amp;gid=1878262" target="_blank">
                                        <i class="fa fa-linkedin social-icon"></i>
                                    </a>
                                    <a href="http://www.pinterest.com/aucareer/" target="_blank">
                                        <i class="fa fa-pinterest social-icon"></i>
                                    </a>
                                    <a href="https://vimeo.com/aucareer" target="_blank">
                                        <i class="fa fa-vimeo-square social-icon"></i>
                                    </a>
                                    <a href="http://tigersprepare.blogspot.com/" target="_blank">
                                        <i class="fa fa-blogger social-icon"></i>
                                    </a>
                                </li>
                            </ul>
                            <i class="fa fa-group block-bg social-bg"></i>
                        </div>
                        <div class="block tweets" ng-controller="twitter-ctrl">
                            <h2><a href="https://twitter.com/aucareer">@AUCareer</a></h2>
                            <div class="tweets-text" data-twitter="">
                                <a class="tweets-link" ng-if="tweets[0].data.url !== undefined && tweets[0].data.url != ''" href="{{ tweets[0].data.url }}">{{ tweets[0].data.text }}</a>
                                <span ng-if="tweets[0].data.url === undefined || tweets[0].data.url == ''">{{ tweets[0].data.text }}</span>
                                <a class="tweets-date" href="https://twitter.com/{{ tweets[0].user.screen_name }}/status/{{ tweets[0].id_str }}">{{ tweets[0].data.date }}</a>
                            </div>
                            <div class="tweets-text" data-twitter="">
                                <a class="tweets-link" ng-if="tweets[1].data.url !== undefined && tweets[1].data.url != ''" href="{{ tweets[1].data.url }}">{{ tweets[1].data.text }}</a>
                                <span ng-if="tweets[1].data.url === undefined || tweets[1].data.url == ''">{{ tweets[1].data.text }}</span>
                                <a class="tweets-date" href="https://twitter.com/{{ tweets[1].user.screen_name }}/status/{{ tweets[1].id_str }}">{{ tweets[1].data.date }}</a>
                            </div>
                            <i class="fa fa-twitter block-bg tweets-bg"></i>
                        </div>

                        <div class="block sponsors">
                            <h2><a href="#">Sponsors</a></h2>
                            <a class="ad" href="http://www.ussteel.com/uss/portal/home/careers/jobopportunities">
                                <img class="ad-image" src="assets/images/ussteel.jpg">
                            </a>
                            <i class="fa fa-certificate block-bg sponsors-bg"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--<div class="row">
                <div class="banner banner-bottom flex">
                    <img class="slider">
                    <img class="slider">
                    <img class="slider">
                    <img class="slider" src="assets/images/expo.jpg">
                    <img class="slider" src="assets/images/education.jpg">
                    <img class="slider" src="assets/images/major.png"> 
                </div>
            </div>-->
            
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
                        <!--<img class="outforwork" src="assets/images/outforwork.png">-->
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
