<?php

namespace App\Http\Controllers\AdminPanel\Team;

use App\Http\Controllers\Controller;
use App\Team;

class TeamPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('rightAdminModerator');
    }

    public function index()
    {
        $teamAll = Team::all();

        return view('team', compact('teamAll'));
    }
}
