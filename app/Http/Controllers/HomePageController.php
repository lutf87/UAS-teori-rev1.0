<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home()
    {
        return view('layouts.pages.home');
    }

    public function kategori()
    {
        return view('layouts.pages.kategori');
    }

}
