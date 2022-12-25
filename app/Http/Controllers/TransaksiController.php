<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        return view('admin.layouts.transaksi.index');
    }

    public function show($id)
    {
        return view('admin.layouts.transaksi.show');
    }

    public function edit($id)
    {
        return view('admin.layouts.transaksi.edit');
    }

}
