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

        {!! Form::open(['url' => '/admin/team/edit/'.request('id'), 'files' => 'true']) !!}
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

        <span class="desc-form">Имя фамилия: </span>{!! Form::text('name', $memberTeam->name) !!}

        <span class="desc-form">Вакансия: </span>{!! Form::text('vacancy', $memberTeam->vacancy) !!}

        <span class="desc-form">Описание навыков: </span>{!! Form::text('description', $memberTeam->description) !!}

        <span class="desc-form">Ссылка на соц.сети: </span>{!! Form::text('social', $memberTeam->social) !!}

        <span class="desc-form">Фото: </span>

        <div style="width: 200px;height: 200px; margin-top: 30px;"><img style="-webkit-background-size: cover;background-size: cover; width: 100%; height: 100%;" src="{{ asset($memberTeam->photo_link) }}" alt="Php-прогер" class="img-responsive">
        </div>

        {!! Form::file('photo') !!}

        {!! Form::submit('Изменить', ['class' => 'submit-edit']) !!}

        {!! Form::close() !!}
    </div>

@endsection