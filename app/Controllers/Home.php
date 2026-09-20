<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function enrollment()
    {
        return view('enrollment');
    }

    public function profile()
    {
        return view('profile');
    }
}