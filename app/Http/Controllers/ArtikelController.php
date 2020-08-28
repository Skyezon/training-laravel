<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function create(Request $request){
        //elonquent
        Artikel::create([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'penulis' => $request->penulis,
        ]);
        //query builder
//        DB::table('artikels')->insert([
//            'judul' => $request->judul,
//            'konten' => $request->konten,
//            'penulis' => $request->penulis,
//        ]);

        return back();
    }
}
