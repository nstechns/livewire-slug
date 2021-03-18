<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function bootstrap()
    {
        return view('pages.home_bootstrap');
    }

    public function tailwind()
    {
        return view('pages.home_tailwind');
    }
}
