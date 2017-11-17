<?php

namespace App\Http\Controllers\AdminPanel\Slider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SliderPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('rightAdminModerator');
    }

    public function index()
    {
        return view('slider');
    }
}
