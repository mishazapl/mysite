<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
        $teamAll = Team::all();

        return view('main', compact('teamAll'));
    }
}
