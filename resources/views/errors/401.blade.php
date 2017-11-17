<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div style="font-size: 40px; text-align: center; position: relative; top: 150px;">
    Вы не авторизованы.
    <br>
    <a href="/login" style="position: relative;top: 50px; font-size: 20px;"><button>Вернуться на страницу авторизации</button></a>
</div>

</body>
</html>