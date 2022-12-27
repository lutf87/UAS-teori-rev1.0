<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Kategori::latest()->paginate(5);
        return view('admin.layouts.kategori.index', compact('posts'));
    }

    public function create()
    {
        return view('admin.layouts.kategori.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kode' => 'required',
            'nama' => 'required',
        ]);

        // up image
        $image = $request->file('foto');
        $image->storeAs('public/posts', $image->getClientOriginalName());

        Kategori::create([
            'foto' => $image->getClientOriginalName(),
            'kode' => $request->kode,
            'nama' => $request->nama
        ]);

        //redirect to index

        if (!$request) {
            return redirect()->route('admin.kategori.create')->with(['error' => 'Data gagal disimpan!']);
        } else {
            return redirect()->route('admin.kategori.index')->with(['success' => 'Data berhasil disimpan!']);
        }
    }

    public function edit($id)
    {
        return view('admin.layouts.kategori.edit');
    }

    public function show($id)
    {
        return view('admin.layouts.kategori.show');
    }
}
