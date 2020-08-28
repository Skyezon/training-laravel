@extends('template.head')

@section('title','Create Artikel')

@section('content')
    <form class="p-5" action="{{route('createArtikel')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Judul artikel</label>
            <input name="judul" type="text" class="form-control" id="exampleInputEmail1" placeholder="Judul artikel" aria-describedby="emailHelp">
        </div>
        <div class="form-group d-flex flex-column">
            <label for="exampleInputEmail2">Content Artikel</label>
            <textarea name="konten" class="form-control" name="konten" cols="15" rows="3" ></textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail3">Nama penulis</label>
            <input name="penulis" type="text" class="form-control" id="exampleInputEmail3" placeholder="Penulis artikel" aria-describedby="emailHelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection


