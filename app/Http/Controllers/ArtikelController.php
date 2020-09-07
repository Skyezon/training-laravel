<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Http\Requests\ArtikelRequest;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function show(){
//        $artikels = Artikel::all();
//        $artikels = Artikel::where(,,)->paginate(5);
        $artikels = Artikel::paginate(5);
        return view('showData',compact('artikels'));
    }

    public function  viewCreateArtikel(){
        return view('createArtikel');
    }

    public function delete($id){
        $artikel = Artikel::find($id);
        Storage::delete($artikel->image);
        Artikel::destroy($id);

        return $this->show();
    }

    public function update(ArtikelRequest $request ,$id){
        $artikel = Artikel::where('id','=',$id)->first();
        $path = $request->file('image')->store('artikel_images');
        Storage::delete($artikel->image);
        $artikel->update([
            'judul' => $request->judul,
            'konten' => $request->konten,
            'penulis' => $request->penulis,
            'image' => $path
        ]);

        return redirect(route('showUpdateArtikel',$id))->with('success','berhasil update');
    }

    public function showUpdate($id){
        $dapatArtikel = Artikel::find($id);
        return view('updateArtikel',['dapatArtikel' => $dapatArtikel]);
    }

    public function getArtikel($id){
        $dapatArtikel = Artikel::find($id);
        return view('artikel',['artikel' => $dapatArtikel]);
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
