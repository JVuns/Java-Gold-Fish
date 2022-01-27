<?php

namespace App\Http\Controllers;

use App\Models\Ikan;
use Illuminate\Http\Request;

class IkanController extends Controller
{
    public function create()
    {
        return view('ikan.create');
    }

    public function index()
    {
        $ikan = Ikan::all();
        return view('fish/Oranda', compact('ikan'));
    }

    public function store(Request $request)
    {
        $ikan = new Ikan;
        $ikan->nama = $request->input('nama');
        $ikan->kelas = $request->input('kelas');
        $ikan->ukuran = $request->input('ukuran');
        $ikan->harga = $request->input('harga');
        $ikan->input = $request->input('input');
        $ikan->status = $request->input('status');
        $ikan->save();
        return redirect()->back()->with('status','Ikan Added Successfully');
    }
}
