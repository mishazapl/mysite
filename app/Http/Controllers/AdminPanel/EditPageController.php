<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;

class EditPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('rightAdminModerator');
    }

    public function index()
    {
        $countTeam = Team::all()->count();

        return view('edit', compact('countTeam'));
    }

}
