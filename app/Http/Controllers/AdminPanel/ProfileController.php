<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('profile');
        $this->middleware('rightAdminModerator');
    }

    public function index()
    {
        $privilege = Auth::user()->role;

        return view('profile', compact('privilege'));
    }
}
