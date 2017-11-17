<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{ ('libCss/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <link href="{{ ('libCss/style.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <!--js-->
    <script src="{{ ('libJs/jquery-2.1.1.min.js') }}"></script>
    <!--icons-css-->
    <link href="{{ ('libCss/font-awesome.css') }}" rel="stylesheet">
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>

</head>
<body>
<!--inner block start here-->
<div class="inner-block">
    <div class="error-404">
        <div class="error-page-left">
            <img src="{{  asset('libImg/404.png') }}" alt="">
        </div>
        <div class="error-right">
            <h2>Oops! Page Not Open</h2>
            <h4>Nothing Is Found Here!!</h4>
            <a href="{{ Redirect::back()->getTargetUrl() }}">Go Back</a>
        </div>
    </div>
</div>
<!--inner block end here-->

<!--copy rights start here-->
<div class="copyrights">
    <p>© 2017 Misha Zapalenov. All Rights Reserved | Design and PHP - Programmer by <a href="https://vk.com/atawerrus"
                                                                                       target="_blank"
                                                                                       style="border-bottom: solid">Misha
            Zapalenov</a></p>
</div>

<script src="{{ ('libJs/jquery.nicescroll.js') }}"></script>
<script src="{{ ('libJs/scripts.js') }}"></script>
<!--//scrolling js-->
<script src="{{ ('libJs/bootstrap.js') }}"></script>

</body>
</html>
