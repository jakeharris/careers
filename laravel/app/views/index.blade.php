@extends('layouts.master')

@section('title')
Career Center
@endsection

@section('mainHeading')
@endsection

@section('subHeading')
@endsection

@section('navbar')
    <ul>
        <li><a href="http://www.auburn.edu/career/students/">Students &amp; Alumni</a></li>
        <li><a href="http://www.auburn.edu/career/parents/">Family</a></li>
        <li><a href="http://www.auburn.edu/career/faculty/">Faculty</a></li>
        <li><a href="http://hire.auburn.edu">Employers</a></li>
    </ul>
@endsection

@section('banner')
    <img class="slider" src="assets/major.png">
    <img class="slider" src="assets/using.png">
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
@endsection

@section('body')
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
                    Visit us! We're open Monday through Friday. No appointment necessary from noon until 4 pm. If you prefer an appointment, call <a href="tel:3348444744">(334) 844-4744</a>.
                </div>
            </div>
            <i class="fa fa-briefcase block-bg hours-bg"></i>
        </div>
        
        <div class="block tweets">
            <h2><a href="https://twitter.com/aucareer">@AUCareer</a></h2>
            <div class="tweets-text" data-twitter=""><?php echo $tweet; ?></div>
            <i class="fa fa-twitter block-bg tweets-bg"></i>
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
        
        <div class="block sponsors">
            <h2><a href="#">Sponsor</a></h2>
            <a class="ad" href="http://www.nxtbook.com/nxtbooks/nace/JobChoices0812/index.php">
                <img class="ad-image" src="assets/choices.jpg">
            </a>
            <i class="fa fa-certificate block-bg sponsors-bg"></i>
        </div>
    </div>
@endsection

@section('banner-bottom')
    <img class="slider" src="assets/expo.jpg">
    <img class="slider" src="assets/education.jpg">
<!--
    <img class="slider" src="assets/using.png">
    <img class="slider" src="assets/major.png">
-->
@endsection