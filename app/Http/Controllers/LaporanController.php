<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.layouts.laporan.index');
    }

    public function show($id)
    {
        return view('admin.layouts.laporan.detail');
    }

}
