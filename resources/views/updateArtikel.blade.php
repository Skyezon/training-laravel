@extends('template.head')

@section('title','Create Artikel')

@section('content')

    @if(Session::has('success'))
        <div class="alert alert-success">
            <span>{{Session::get('success')}}</span>
        </div>
    @endif

    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                <div>{{$error}}</div>
            </div>
        @endforeach
    @endif

    <form class="p-5" action="{{route('updateArtikel',['id' => $dapatArtikel->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="form-group">
            <label for="exampleInputEmail1">Judul artikel</label>
            <input name="judul" type="text" class="form-control" id="exampleInputEmail1" value="{{$dapatArtikel->judul}}" placeholder="Judul artikel" aria-describedby="emailHelp">
        </div>

        <div class="form-group d-flex flex-column">
            <label for="exampleInputEmail2">Content Artikel</label>
            <textarea name="konten" class="form-control" name="konten" cols="15" rows="3">{{$dapatArtikel->konten}}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail3">Nama penulis</label>
            <input name="penulis" value="{{$dapatArtikel->penulis}}" type="text" class="form-control" id="exampleInputEmail3" placeholder="Penulis artikel" aria-describedby="emailHelp">
        </div>
        <div class="custom-file d-flex">
            <input type="file" class="" name="image" id="customFile">
{{--            <label class="custom-file-label" for="customFile">Choose file</label>--}}
            <img class="w-50 h-50" src="{{asset('storage/'.$dapatArtikel->image)}}" alt="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection


