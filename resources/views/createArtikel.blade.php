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
            <input name="penulis" type="text" value="{{Auth::user()->name}}" class="form-control" id="exampleInputEmail3" placeholder="Penulis artikel" aria-describedby="emailHelp">
        </div>
        <div class="custom-file">
            <input type="file" class="" name="image" id="customFile">
{{--            <label class="custom-file-label" for="customFile">Choose file</label>--}}
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection


