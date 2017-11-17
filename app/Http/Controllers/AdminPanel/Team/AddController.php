<?php

namespace App\Http\Controllers\AdminPanel\Team;

use App\Http\Requests\TeamRequest;
use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AddController extends Controller
{
    public function __construct()
    {
        $this->middleware('rightAdminModerator');
    }

    public function index()
    {
        return view('add_team');
    }


    public function store(TeamRequest $request)
    {

        /**
         * Сохранение данных о команде.
         */

        if (is_null($request->file('photo'))) {
            print 'Фотография должна быть обязательно!';
            return;
        }

        $team = new Team;
        $team->name = $request->post('name');
        $team->vacancy = $request->post('vacancy');
        $team->description = $request->post('description');
        $team->social = $request->post('social');

        $path = Storage::put('img/', $request->file('photo'));

        $team->photo_link = $path;


        $team->save();

        return redirect('/admin/team');

    }

}
