<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
<div class="signup-page-main">
    <div class="signup-main">
        <div class="signup-head">
            <h1>Sign Up</h1>
        </div>
        <div class="signup-block">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">

                        <input id="name" type="text" name="login" value="{{ old('login') }}" placeholder="Login" required autofocus>

                        @if ($errors->has('login'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('login') }}</strong>
                                    </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <input type="text" name="email" placeholder="Email" required="" value="{{ old('email') }}">

                    @if ($errors->has('email'))
                        <span class="help-block">
                               <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                    <input  type="password" name="password" class="lock" placeholder="Password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif

                </div>

                <div class="form-group">


                    <input id="password-confirm" type="password" name="password_confirmation" required class="lock" placeholder="Password Confirm">


                </div>


                <input type="submit" name="Sign In" value="Sign up">
            </form>
            <div class="sign-down">
                <h4>Already have an account? <a href="{{ url('/login') }}"> Login here.</a></h4>
                <h5><a href="{{ url('/') }}">Go Back to Home</a></h5>
            </div>
        </div>
    </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
    <p>© 2017 Misha Zapalenov. All Rights Reserved | Design and PHP - Programmer by <a href="https://vk.com/atawerrus" target="_blank" style="border-bottom: solid">Misha Zapalenov</a></p>
</div>

<script src="{{ ('libJs/jquery.nicescroll.js') }}"></script>
<script src="{{ ('libJs/scripts.js') }}"></script>
<!--//scrolling js-->
<script src="{{ ('libJs/bootstrap.js') }}"></script>
</body>
</html>




