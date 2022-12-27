<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.layouts.profile.index');
    }

    public function edit($id)
    {
        return view('admin.layouts.profile.setting');
    }

}
