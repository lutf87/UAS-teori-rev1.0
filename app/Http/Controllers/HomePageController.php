<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function home()
    {
        return view('layouts.pages.home');
    }

    public function kategori()
    {
        return view('layouts.pages.kategori');
    }

}
