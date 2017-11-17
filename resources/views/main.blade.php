@extends('layouts.app')

@section('banner')
    <div class="banner" style="background: url('/public/app/img/1.jpg')">
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

@section('team-content')

    @foreach($teamAll as $team)
    <div class="col-md-3 team-grid">
        <div class="team-grid1">
            <div style="width: 300px;height: 300px;"><img style="-webkit-background-size: cover;background-size: cover; width: 100%; height: 100%;" src="{{  $team->photo_link }}" alt="Php-прогер" class="img-responsive">
            </div>
            <div class="p-mask">
                <p>{{ $team->vacancy }}</p>
                <div class="event-meta" style="color: white">
                    <h4>{{ $team->description }}</h4>
                </div>
            </div>
        </div>
        <h5>{{ $team->name }}<span>{{ $team->vacancy }}</span></h5>

        <a href="{{ $team->social }}">
        <div style="width: 50px;height: 50px; position: relative; left: 40%;">
        <i class="social-vk" style="-webkit-background-size: cover;background-size: cover;"></i>
        </div>
        </a>


    </div>
    @endforeach

@endsection