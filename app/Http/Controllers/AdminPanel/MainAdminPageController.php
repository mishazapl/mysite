<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainAdminPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('rightAdminModerator');
    }

    public function index()
    {
        return view('welcome');
    }

}
