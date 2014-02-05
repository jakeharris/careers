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
        <li><a href="http://www.auburn.edu/career/students/">Students</a></li>
        <li><a href="http://www.auburn.edu/career/parents/">Parents</a></li>
        <li><a href="http://hire.auburn.edu">Employers</a></li>
    </ul>
@endsection

@section('banner')
    <div class="slider">
        <div class="slider-mask">
            <ul class="slider-list">
                <li class="slider-list-item">
                    <a href="#">
                        <img src="assets/major.png" />
                    </a>
                </li>
                
                <li class="slider-list-item">
                    <a href="#">
                        <img src="assets/using.png" />
                    </a>
                </li>
                
                <li class="slider-list-item">
                    <a href="#">
                        <img src="assets/major.png" />
                    </a>
                </li>
                
                <li class="slider-list-item">
                    <a href="#">
                        <img src="assets/using.png" />
                    </a>
                </li>
                
                <li class="slider-list-item">
                    <a href="#">
                        <img src="assets/major.png" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="slider">
        <div class="slider-mask">
            <ul class="slider-list">
                <li class="slider-list-item">
                    <a href="#">
                        <img src="assets/using.png" />
                    </a>
                </li>
                
                <li class="slider-list-item">
                    <a href="#">
                        <img src="assets/major.png" />
                    </a>
                </li>
                
                <li class="slider-list-item">
                    <a href="#">
                        <img src="assets/using.png" />
                    </a>
                </li>
                
                <li class="slider-list-item">
                    <a href="#">
                        <img src="assets/major.png" />
                    </a>
                </li>
                
                <li class="slider-list-item">
                    <a href="#">
                        <img src="assets/using.png" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('body')
    <div class="flex">
        <div class="block hours">
            <h2><a href="http://auburn.edu/map/?id=76">Office Hours</a></h2>
            Filter fair trade, robust froth café au lait, mazagran eu aftertaste cultivar sit single shot. Extraction, et, eu, chicory caramelization robusta milk redeye. Iced barista foam, robusta aroma extra turkish grounds sit cappuccino. Lungo, siphon brewed steamed turkish cup macchiato whipped.
            <i class="fa fa-clock-o block-bg hours-bg"></i>
        </div>
        
        <div class="block tweets">
            <h2><a href="https://twitter.com/aucareer">@AUCareer</a></h2>
            <div class="tweets-text" data-twitter=""></div>
            <i class="fa fa-twitter block-bg tweets-bg"></i>
        </div>
        
        <div class="block blog">
            <h2><a href="http://tigersprepare.blogspot.com">Our Blog</a></h2>
            <h3>Career Mythbusters: &ldquo;I have a great GPA. I don’t need an internship.&rdquo;</h3>
            <div>Don’t get me wrong. GPA is an important factor in your job search, making you more (or less) marketable and possibly impacting your starting salary. However&hellip;</div>
            <i class="fa fa-edit block-bg blog-bg"></i>
        </div>
        
        <div class="block social">
            <h2><a href="#">Connect With Us</a></h2>
            Flavour caffeine cappuccino aged carajillo french press, est aroma cup mocha aroma. Dripper lungo, grinder aromatic coffee eu steamed at grounds. And frappuccino galão americano froth kopi-luwak mug galão eu spoon. Dripper, so, caffeine froth cultivar, that macchiato saucer at single origin.
            <i class="fa fa-group block-bg social-bg"></i>
        </div>
        
        <div class="block events">
            <h2><a href="http://www.auburn.edu/career/events/">Upcoming Events</a></h2>
            Mocha doppio, extraction espresso, cinnamon roast in and lungo. Et foam instant, a latte saucer siphon mazagran. Café au lait, crema, saucer id mocha irish galão viennese filter. White, extra aftertaste brewed foam java steamed cultivar.
            <i class="fa fa-calendar block-bg events-bg"></i>
        </div>
        
        <div class="block sponsors">
            <h2><a href="#">Sponsor</a></h2>
            Kopi-luwak est so, cultivar grounds ut rich steamed cortado caffeine. Ristretto cream black crema crema instant black fair trade. A mocha aroma aromatic as sweet french press carajillo caffeine crema milk.
            <i class="fa fa-certificate block-bg sponsors-bg"></i>
        </div>
    </div>
@endsection