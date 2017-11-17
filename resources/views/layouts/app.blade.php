<!DOCTYPE html>
<html>
<head>
    <title>Trendy Furnish | Home</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- //for-mobile-apps -->
    <link href="{{ asset('libCss/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="{{ asset('app/css/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!-- js -->
    <script src="{{ asset('libJs/jquery-2.1.1.min.js') }}"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="{{ asset('app/lib/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app/lib/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->

</head>

<!-- Промежуточный контент -->

@section('nav-content')
<li class="active"><a href="/"><i class="glyphicon glyphicon-home" aria-hidden="true"></i>Home</a></li>
<li><a href="/" class="hvr-bounce-to-bottom"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i>Blog</a></li>
<li><a href="/" class="hvr-bounce-to-bottom"><i class="glyphicon glyphicon-picture" aria-hidden="true"></i>Gallery</a></li>
<li><a href="/" class="hvr-bounce-to-bottom"><i class="glyphicon glyphicon-text-size" aria-hidden="true"></i>Short Codes</a></li>
<li><a href="/" class="hvr-bounce-to-bottom"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Mail Us</a></li>
@endsection
<!-- Close -->

<body>
<!-- header -->
@section('navbar')
<div class="header">
    <div class="container">
        <div class="logo">
            <h1><a href="/"><img src="{{ asset('app/img/logo.png') }}" alt=" " class="img-responsive" /></a></h1>
        </div>
        <div class="header-left">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-9" id="link-effect-9">
                        <ul class="nav navbar-nav">
                            @yield('nav-content')
                        </ul>
                    </nav>
                    <div class="header-right">
                        <p><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Contact Us<span>+0123 456 789</span></p>
                    </div>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
    </div>
</div>
@endsection
@yield('navbar')
<!-- //header -->
<!-- banner -->
@section('banner')
<div class="banner">
    <div class="container">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="banner-info">
                            <div class="banner-info1">
                                <h3>culpa qui officia deserunt mollit anim</h3>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info">
                            <div class="banner-info1">
                                <h3>vel illum qui dolorem eum fugiat quo</h3>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="banner-info">
                            <div class="banner-info1">
                                <h3>qui in ea voluptate velit esse quam</h3>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- FlexSlider -->
        <link href="{{ asset('app/lib/flexslider.css') }}" rel="stylesheet" type="text/css" media="all" />
        <script defer src="{{ asset('app/lib/jquery.flexslider.js') }}"></script>
        <script type="text/javascript">
            $(window).load(function(){
                $('.flexslider').flexslider({
                    animation: "slide",
                    start: function(slider){
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <!-- //FlexSlider -->
    </div>
</div>
@endsection
@yield('banner')
<!-- //banner -->

<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <div class="col-md-5 banner-bottom-left">
            <h2>create a modern style <span>with our</span> furniture</h2>
        </div>
        <div class="col-md-7 banner-bottom-right">
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum.</p>
            <ol>
                <li>Mollit anim id est laborum</li>
                <li>Occaecat cupidatat non proident</li>
                <li>Culpa qui officia deserunt</li>
                <li>Aute irure dolor in reprehenderit</li>
                <li>Voluptate velit esse cillum</li>
                <li>Quo voluptas nulla pariatur</li>
                <li>Ea voluptate velit esse quam nihil</li>
            </ol>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //banner-bottom -->

<!-- team -->
<div class="team">
    <div class="container">
        <h3 class="team-heading">Meet our team</h3>
        <p class="sint"><span>occaecat cupidatat non proident</span></p>
        <div class="team-grids">
            @section('team-content')
            <div class="col-md-3 team-grid">
                <div class="team-grid1">
                    <img src="{{  asset('app/img/2.jpg') }}" alt=" " class="img-responsive" />
                    <div class="p-mask">
                        <p>Neque porro quisquam est, qui dolorem ipsum.</p>
                        <div class="event-meta">
                            <h4>unde omnis iste natus error sit voluptatem</h4>
                        </div>
                    </div>
                </div>
                <h5>Laura Mark<span>Sales Manager</span></h5>
                <ul class="social">
                    <li><a class="social-facebook" href="#">
                            <i></i>
                            <div class="tooltip"><span>Facebook</span></div>
                        </a></li>
                </ul>
            </div>
            @endsection
            @yield('team-content')
            <div class="clearfix"> </div>
        </div>

    </div>
</div>
<!-- //team -->
<!-- services -->
<div class="services">
    <div class="container">
        <h3>Services</h3>
        <p class="sint"><span>occaecat cupidatat non proident</span></p>
        <div class="services-grids">
            <div class="col-md-4 services-grid">
                <i class="glyphicon glyphicon-usd" aria-hidden="true"></i>
                <div class="service-icon color-11">
                    <a class="link link--yaku" href="single.html">
                        <span>P</span><span>r</span><span>o</span><span>f</span><span>i</span><span>t</span>
                    </a>
                </div>
                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                    voluptatibus maiores.</p>
                <div class="more">
                    <a href="single.html" class="hover hover-translate transtale-left">
                        Learn More...
                    </a>
                </div>
            </div>
            <div class="col-md-4 services-grid">
                <i class="glyphicon glyphicon-lamp" aria-hidden="true"></i>
                <div class="service-icon color-11">
                    <a class="link link--yaku" href="single.html">
                        <span>N</span><span>e</span><span>w</span><span>d</span><span>e</span><span>s</span><span>i</span><span>g</span><span>n</span><span>s</span>
                    </a>
                </div>
                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                    voluptatibus maiores.</p>
                <div class="more">
                    <a href="single.html" class="hover hover-translate transtale-left">
                        Learn More...
                    </a>
                </div>
            </div>
            <div class="col-md-4 services-grid">
                <i class="glyphicon glyphicon-saved" aria-hidden="true"></i>
                <div class="service-icon color-11">
                    <a class="link link--yaku" href="single.html">
                        <span>Q</span><span>u</span><span>a</span><span>l</span><span>i</span><span>t</span><span>y</span>
                    </a>
                </div>
                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                    voluptatibus maiores.</p>
                <div class="more">
                    <a href="single.html" class="hover hover-translate transtale-left">
                        Learn More...
                    </a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="services-grids">
            <div class="col-md-4 services-grid">
                <i class="glyphicon glyphicon-home" aria-hidden="true"></i>
                <div class="service-icon color-11">
                    <a class="link link--yaku" href="single.html">
                        <span>D</span><span>e</span><span>l</span><span>i</span><span>v</span><span>e</span><span>r</span><span>y</span>
                    </a>
                </div>
                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                    voluptatibus maiores.</p>
                <div class="more">
                    <a href="single.html" class="hover hover-translate transtale-left">
                        Learn More...
                    </a>
                </div>
            </div>
            <div class="col-md-4 services-grid">
                <i class="glyphicon glyphicon-bullhorn" aria-hidden="true"></i>
                <div class="service-icon color-11">
                    <a class="link link--yaku" href="single.html">
                        <span>B</span><span>r</span><span>a</span><span>n</span><span>d</span><span>i</span><span>n</span><span>g</span><span>s</span>
                    </a>
                </div>
                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                    voluptatibus maiores.</p>
                <div class="more">
                    <a href="single.html" class="hover hover-translate transtale-left">
                        Learn More...
                    </a>
                </div>
            </div>
            <div class="col-md-4 services-grid">
                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                <div class="service-icon color-11">
                    <a class="link link--yaku" href="single.html">
                        <span>C</span><span>u</span><span>s</span><span>t</span><span>o</span><span>m</span><span>e</span><span>r</span><span>s</span>
                    </a>
                </div>
                <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
                    voluptatibus maiores.</p>
                <div class="more">
                    <a href="single.html" class="hover hover-translate transtale-left">
                        Learn More...
                    </a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //services -->
<!-- testimonials -->
<div class="testimonials">
    <div class="container">
        <h3 class="team-heading">What Our Customer Say</h3>
        <p class="sint"><span>occaecat cupidatat non proident</span></p>
        <div class="testimonials-grids">
            <div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
                <div class="wmuSliderWrapper">
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="testimonials-grid">
                                <div class="col-xs-3 testimonials-grid-left">
                                    <img src="{{  asset('app/img/1.png') }}" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-xs-9 testimonials-grid-right">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident.</p>
                                    <h4>Richard Doe</h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="testimonials-grid">
                                <div class="col-xs-3 testimonials-grid-left">
                                    <img src="{{  asset('app/img/3.png') }}" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-xs-9 testimonials-grid-right">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident.</p>
                                    <h4>Rita James</h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="testimonials-grid">
                                <div class="col-xs-3 testimonials-grid-left">
                                    <img src="{{  asset('app/img/2.png') }}" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-xs-9 testimonials-grid-right">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident.</p>
                                    <h4>Crisp Ali</h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="testimonials-grid">
                                <div class="col-xs-3 testimonials-grid-left">
                                    <img src="{{  asset('app/img/4.png') }}" alt=" " class="img-responsive" />
                                </div>
                                <div class="col-xs-9 testimonials-grid-right">
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                        excepturi sint occaecati cupiditate non provident.</p>
                                    <h4>Laura roy</h4>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <script src="{{ asset('app/lib/jquery.wmuSlider.js') }}"></script>
            <script>
                $('.example1').wmuSlider();
            </script>
        </div>
    </div>
</div>
<div class="newsletter">
    <div class="container">
        <h3>sign up for our newsletter</h3>
        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.</p>
        <form action="#" method="post">
            <input type="email" name="Email" value="Enter your email to update" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email to update';}" required="">
            <input type="submit" value="Subscribe">
        </form>
    </div>
</div>
<!-- //testimonials -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <ul class="social">
            <li><a class="social-facebook" href="#">
                    <i></i>
                    <div class="tooltip"><span>Facebook</span></div>
                </a></li>
            <li><a class="social-twitter" href="#">
                    <i></i>
                    <div class="tooltip"><span>Twitter</span></div>
                </a></li>
            <li><a class="social-google" href="#">
                    <i></i>
                    <div class="tooltip"><span>Google+</span></div>
                </a></li>
            <li><a class="social-pinterest" href="#">
                    <i></i>
                    <div class="tooltip"><span>Pinterest</span></div>
                </a></li>
            <li><a class="social-instagram" href="#">
                    <i></i>
                    <div class="tooltip"><span>Instagram</span></div>
                </a></li>
        </ul>
        <ul class="main-nav">
            <li><a href="index.html">Home</a><i>|</i></li>
            <li><a href="blog.html">Blog</a><i>|</i></li>
            <li><a href="gallery.html">Gallery</a><i>|</i></li>
            <li><a href="short-codes.html">Short Codes</a><i>|</i></li>
            <li><a href="mail.html">Mail Us</a></li>
        </ul>
        <div class="copy-right">
            <p>© 2016 Trendy Furnish. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
    </div>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
<script src="{{ asset('libJs/bootstrap.js') }}"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>