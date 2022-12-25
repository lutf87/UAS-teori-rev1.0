<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        return view('admin.layouts.produk.index');
    }

    public function create()
    {
        return view('admin.layouts.produk.create');
    }

    public function edit($id)
    {
        return view('admin.layouts.produk.edit');
    }

}
