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
        $ikan->ppath = $request->input('ppath');
        // try{
            // $folderPath = public_path('upload/');
 
            // $image_parts = explode(";base64,", $request->image);
            // $image_type_aux = explode("image/", $image_parts[0]);
            // $image_type = $image_type_aux[1];
            // $image_base64 = base64_decode($image_parts[1]);
     
            // $imageName = uniqid() . '.png';
     
            // $imageFullPath = $folderPath.$imageName;
     
            // file_put_contents($imageFullPath, $image_base64);
     
            // $ikan->ppath = $imageFullPath;
        // } catch(\Exception $exception)
        // {
        //     redirect()->back()->with('status','Missing Picture');
        // }
        $ikan->save();
        return redirect()->back()->with('status','Ikan Added Successfully');
    }

    public function picture(Request $request)
    {

        $folderPath = public_path('upload/');
 
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
        $imageName = uniqid() . '.png';
     
        $imageFullPath = $folderPath.$imageName;
        $picPath = $imageName;
        file_put_contents($imageFullPath, $image_base64);
        return response()->json(['success'=>$picPath]);
    }
}

