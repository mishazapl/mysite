<?php

namespace App\Http\Controllers\AdminPanel\Team;

use App\Http\Requests\TeamRequest;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class UpdateDeleteController extends Controller
{
    public function __construct()
    {
        $this->middleware('rightAdminModerator');
        $this->middleware('checkMemberTeam');
    }

    public function edit(Request $request)
    {
        $memberTeam = Team::find(request('id'));

        return view('edit_team', compact('memberTeam'));
    }

    public function store(TeamRequest $request)
    {

        /**
         * Сохранение/Изменение/Добавление данных о команде.
         */

        $team = Team::find(request('id'));
        $team->name = $request->post('name');
        $team->vacancy = $request->post('vacancy');
        $team->description = $request->post('description');
        $team->social = $request->post('social');

        if (!is_null($request->file('photo'))) {
            $path = Storage::put('img/', $request->file('photo'));
            $team->photo_link = $path;
        }

        $team->save();

        return redirect('/admin/team');

    }

    public function delete()
    {
        $team = Team::find(request('id'));
        $team->delete();
        Storage::delete($team->photo_link);
        return redirect(Redirect::back()->getTargetUrl());
    }
}
