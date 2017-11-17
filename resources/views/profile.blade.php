@extends('layouts.admin-panel')

@section('content')
<div class="col-md-6 bg-profile">

    <div class="bg-profile-img">

    <img src="{{ asset('libImg/none-photo.svg') }}" alt="">

    </div>

    <div class="info-block">

        <span>Login: {{ Auth::user()->login }}</span>

        <span>Email: {{ Auth::user()->email }}</span>

        <span>Privilege: {{ $privilege->name }}</span>

    </div>

</div>
@endsection

@section('head-lib')
    @parent
    <style>

        .bg-profile {
            height: auto;
            background-color: #fff;
            margin-left: 100px;
            width: 20%;
        }

        .bg-profile-img {
            -webkit-background-size: cover;
            background-size: cover;
            width: 140px;
            height: 140px;
            margin-left: 30%;
            margin-top: 7%;
        }
        .bg-profile-img img {
            -webkit-background-size: cover;
            background-size: cover;
            width: 100%;
            height: 100%;
        }

        .info-block {
            margin-left: 10%;
            margin-top: 16%;
            margin-bottom: 20%;
        }

        .info-block span{
            display: block;
            margin-top: 20px;
            margin-right: 5%;
        }

        .copyrights {
            margin-top: 33%;
        }

    </style>
@endsection

