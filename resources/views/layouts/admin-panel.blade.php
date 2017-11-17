<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @section('head-lib')

    <link href="{{ asset('libCss/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="{{ asset('libCss/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src="{{ asset('libJs/jquery-2.1.1.min.js') }}"></script>
    <!--icons-css-->
    <link href="{{ asset('libCss/font-awesome.css') }}" rel="stylesheet">
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>

    @endsection
    @yield('head-lib')


    <title>Laravel</title>

</head>

<body>
<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">
            @section('navbar')
            <!--header start here-->
            <div class="header-main">
                <div class="header-left">
                    <div class="logo-name">
                        <a href="{{ url('/admin') }}"> <h1>Shoppy</h1>
                            <!--<img id="logo" src="" alt="Logo"/>-->
                        </a>
                    </div>
                    <!--search-box-->
                    <div class="search-box">
                        <form>
                            <input type="text" placeholder="Search..." required="">
                            <input type="submit" value="">
                        </form>
                    </div><!--//end-search-box-->
                    <div class="clearfix"> </div>
                </div>
                <div class="header-right">
                    <div class="profile_details_left"><!--notifications of menu start -->
                        <ul class="nofitications-dropdown">
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 3 new messages</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="{{ asset('libImg/p4.png') }}" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li class="odd"><a href="#">
                                            <div class="user_img"><img src="{{ asset('libImg/p2.png') }}" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="{{ asset('libImg/p3.png') }}" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all messages</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 3 new notification</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="{{ asset('libImg/p5.png') }}" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li class="odd"><a href="#">
                                            <div class="user_img"><img src="{{ asset('libImg/p6.png') }}" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="user_img"><img src="{{ asset('libImg/p7.png') }}" alt=""></div>
                                            <div class="notification_desc">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all notifications</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown head-dpdn">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="notification_header">
                                            <h3>You have 8 pending task</h3>
                                        </div>
                                    </li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar yellow" style="width:40%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar green" style="width:90%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar red" style="width: 33%;"></div>
                                            </div>
                                        </a></li>
                                    <li><a href="#">
                                            <div class="task-info">
                                                <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="progress progress-striped active">
                                                <div class="bar  blue" style="width: 80%;"></div>
                                            </div>
                                        </a></li>
                                    <li>
                                        <div class="notification_bottom">
                                            <a href="#">See all pending tasks</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                    <!--notification menu end -->
                    <div class="profile_details">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">
                                        <span class="prfil-img">
                                            @if(Auth::user()->linkPhoto == 0)
                                            <img src="{{ asset('libImg/none-photo-header.png') }}" alt=""> </span>
                                        @else
                                            <img src="{{ asset(Auth::user()->linkPhoto) }}" alt=""> </span>
                                            @endif
                                        <div class="user-name">
                                            <p>{{ Auth::user()->login }}</p>
                                            <span>{{ Auth::user()->role->name }}</span>
                                        </div>
                                        <i class="fa fa-angle-down lnr"></i>
                                        <i class="fa fa-angle-up lnr"></i>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                    <li> <a href="{{ url('/admin/profile/'.Auth::user()->id) }}"><i class="fa fa-user"></i> Profile</a> </li>
                                    <li> <a href="href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> Logout</a> </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            @endsection
            @yield('navbar')
            <!--heder end here-->
            <!-- script-for sticky-nav -->
            <script>
                $(document).ready(function() {
                    var navoffeset=$(".header-main").offset().top;
                    $(window).scroll(function(){
                        var scrollpos=$(window).scrollTop();
                        if(scrollpos >=navoffeset){
                            $(".header-main").addClass("fixed");
                        }else{
                            $(".header-main").removeClass("fixed");
                        }
                    });

                });
            </script>
            <!-- /script-for sticky-nav -->
            <!--inner block start here-->
            <div class="inner-block">
                <!--market updates updates-->
                @section('content')
                <div class="market-updates">
                    <div class="col-md-4 market-update-gd">
                        <a href="{{ url('/admin') }}"><div class="market-update-block clr-block-1">
                            <div class="col-md-8 market-update-left">
                                <h3>Тестовый текст</h3>
                                <h4>Состав команды</h4>
                                <p>В этом разделе вы можете добавить членов вашей команды</p>
                            </div>
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-users icon-style-green"> </i>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 market-update-gd">
                        <div class="market-update-block clr-block-2">
                            <div class="col-md-8 market-update-left">
                                <h3>135</h3>
                                <h4>Daily Visitors</h4>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-eye"> </i>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-4 market-update-gd">
                        <div class="market-update-block clr-block-3">
                            <div class="col-md-8 market-update-left">
                                <h3>23</h3>
                                <h4>New Messages</h4>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class="col-md-4 market-update-right">
                                <i class="fa fa-envelope-o"> </i>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!--market updates end here-->
                <!--mainpage chit-chating-->
                <div class="chit-chat-layer1">
                    <div class="col-md-6 chit-chat-layer1-left">
                        <div class="work-progres">
                            <div class="chit-chat-heading">
                                Recent Followers
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Project</th>
                                        <th>Manager</th>

                                        <th>Status</th>
                                        <th>Progress</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Face book</td>
                                        <td>Malorum</td>

                                        <td><span class="label label-danger">in progress</span></td>
                                        <td><span class="badge badge-info">50%</span></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Twitter</td>
                                        <td>Evan</td>

                                        <td><span class="label label-success">completed</span></td>
                                        <td><span class="badge badge-success">100%</span></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Google</td>
                                        <td>John</td>

                                        <td><span class="label label-warning">in progress</span></td>
                                        <td><span class="badge badge-warning">75%</span></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>LinkedIn</td>
                                        <td>Danial</td>

                                        <td><span class="label label-info">in progress</span></td>
                                        <td><span class="badge badge-info">65%</span></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Tumblr</td>
                                        <td>David</td>

                                        <td><span class="label label-warning">in progress</span></td>
                                        <td><span class="badge badge-danger">95%</span></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Tesla</td>
                                        <td>Mickey</td>

                                        <td><span class="label label-info">in progress</span></td>
                                        <td><span class="badge badge-success">95%</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                @endsection
                @yield('content')
            </div>

            <!--copy rights start here-->
            <div class="copyrights col-md-12">
                <p>© 2017 Misha Zapalenov. All Rights Reserved | Design and PHP - Programmer by <a href="https://vk.com/atawerrus" target="_blank" style="border-bottom: solid">Misha Zapalenov</a></p>
            </div>
            <!--COPY rights end here-->
        </div>
    </div>
    @section('sidebar')
    <!--slider menu-->
    <div class="sidebar-menu">
        <div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span>

            </a> </div>
        <div class="menu">
            <ul id="menu" >
                <li id="menu-home" ><a href="{{ url('/admin') }}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                <li id="menu-home" ><a href="{{ url('/admin/edit/sites') }}"><i class="fa fa-pencil-square-o"></i><span>Редактирование</span></a></li>
            </ul>
        </div>
    </div>
    @endsection
    @yield('sidebar')
    <!--slider menu close-->
    <div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
    var toggle = true;

    $(".sidebar-icon").click(function() {
        if (toggle)
        {
            $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
            $("#menu span").css({"position":"absolute"});
        }
        else
        {
            $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
            setTimeout(function() {
                $("#menu span").css({"position":"relative"});
            }, 400);
        }
        toggle = !toggle;
    });
</script>
<!--scrolling js-->
<script src="{{ asset('libJs/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('libJs/scripts.js') }}"></script>
<!--//scrolling js-->
<script src="{{ asset('libJs/bootstrap.js') }}"></script>

<!-- mother grid end here-->
</body>
</html>
