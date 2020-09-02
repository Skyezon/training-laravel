<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Http\Requests\ArtikelRequest;

class ArtikelController extends Controller
{
    public function show(){
        $artikels = Artikel::all();
        return view('showData',compact('artikels'));
    }

    public function create(ArtikelRequest $request){


        $path = $request->file('image')->store('artikel_images');
        Artikel::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'penulis' => $request->penulis,
            'image' => $path
        ]);
        //elonquent

        //query builder
//        DB::table('artikels')->insert([
//            'judul' => $request->judul,
//            'konten' => $request->konten,
//            'penulis' => $request->penulis,
//        ]);

        return redirect(route('viewHome'))->with('success','berhasil tersimpan di database');
    }
}
