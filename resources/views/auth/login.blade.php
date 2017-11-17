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
<div class="login-page">
    <div class="login-main">
        <div class="login-head">
            <h1>Login</h1>
        </div>
        <div class="login-block">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <input id="email" type="email" class="form-control"  placeholder="E-mail" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif

                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                    <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif

                </div>

                <div class="forgot-top-grids form-group">
                    <div class="forgot-grid checkbox">
                        <ul>
                            <li>
                                <input type="checkbox" id="brand1" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="brand1"><span></span>Remember me</label>
                            </li>
                        </ul>
                    </div>
                    <div class="forgot">
                        <a href="{{ url('/reset') }}">Forgot password?</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <input type="submit" name="Sign In" value="Login">
                <h3>Not a member?<a href="{{ url('/register') }}"> Sign up now</a></h3>
            </form>
            <h5><a href="{{ url('/') }}">Go Back to Home</a></h5>
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
