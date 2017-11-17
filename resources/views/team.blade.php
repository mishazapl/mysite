@extends('layouts.admin-panel')

@section('content')
    <a href="{{ url('/admin/team/add') }}">Добавить нового члена команды.</a>
    @foreach($teamAll as $team)
        <div class="col-md-3 team-grid">
            <div class="team-grid1">
                <div style="width: 300px;height: 300px;"><img style="-webkit-background-size: cover;background-size: cover; width: 100%; height: 100%;" src="{{ asset($team->photo_link) }}" alt="Php-прогер" class="img-responsive">
                </div>
                <div class="p-mask">
                    <a  style="margin-top: 20px;margin-bottom: 20px; display: block;" href="{{ url('admin/team/edit/'.$team->id) }}">Редактировать</a>
                    <a style="display: block;" href="{{ url('admin/team/delete/'.$team->id) }}">Удалить</a>
                    <div class="event-meta" style="margin-top: 20px;margin-bottom: 20px;">
                        <h4>Описания технологии: {{ $team->description }}</h4>
                    </div>
                </div>
            </div>
            <h4 style="margin-top: 20px;margin-bottom: 20px;">Имя Фамилия: {{ $team->name }}<br><span style="margin-bottom: 20px;margin-top: 20px; display: block;">Вакансия: {{ $team->vacancy }}</span></h4>

            <h3 style="margin-bottom: 20px;">Ссылка на социальную сеть: {{ $team->social }}</h3>


        </div>
    @endforeach
@endsection