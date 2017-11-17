@extends('layouts.admin-panel')

@section('head-lib')
    @parent
    <style>
        .copyrights {
            margin-top: 150px;
        }
        .market-update-block {
            height: 188px;
        }
    </style>
@endsection

@section('content')

    <div class="col-md-4 market-update-gd">
        <a href="{{ url('admin/team') }}"><div class="market-update-block clr-block-1">
                <div class="col-md-8 market-update-left">
                    <h3>{{ $countTeam }}</h3>
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
        <a href="{{ url('admin/slider') }}"><div class="market-update-block clr-block-2">
            <div class="col-md-8 market-update-left">
                <h3>135</h3>
                <h4>Слайдер на сайте</h4>
                <p>В этом разделе вы можете добавить/изменить/удалить картинки/текст вашего слайдера</p>
            </div>
            <div class="col-md-4 market-update-right">
                <i class="fa fa-windows icon-style-green"> </i>
            </div>
            <div class="clearfix"> </div>
        </div>
        </a>
    </div>

@endsection