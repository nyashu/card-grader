<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function service()
    {
        return view('frontend.service');
    }

    public function aboutUs()
    {
        return view('frontend.about-us');
    }
}
