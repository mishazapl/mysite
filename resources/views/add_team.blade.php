@extends('layouts.admin-panel')

@section('head-lib')
    @parent

    <style>
        .form-edit input {
            display: block;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .form-edit form {
            display: inline-block;
            margin-top: 0;
        }
        .desc-form {
            text-align: left;
            margin-top: 10px;
            display: block;
        }

        .submit-edit {
            margin-left: 70px
        }
    </style>

@endsection

@section('content')


    <div class="text-center col-md-12 form-edit">

        {!! Form::open(['url' => '/admin/team/add/', 'files' => 'true']) !!}
        {{ csrf_field() }}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <span class="desc-form">Имя фамилия: </span>{!! Form::text('name') !!}

        <span class="desc-form">Вакансия: </span>{!! Form::text('vacancy') !!}

        <span class="desc-form">Описание навыков: </span>{!! Form::text('description') !!}

        <span class="desc-form">Ссылка на соц.сети: </span>{!! Form::text('social') !!}

        <span class="desc-form">Фото: </span>

        {!! Form::file('photo', ['required' => true]) !!}

        {!! Form::submit('Добавить', ['class' => 'submit-edit']) !!}

        {!! Form::close() !!}
    </div>

@endsection