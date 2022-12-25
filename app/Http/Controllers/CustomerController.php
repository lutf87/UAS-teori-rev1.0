<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('admin.layouts.customer.index');
    }

    public function edit($id)
    {
        return view('admin.layouts.customer.show');
    }

}
