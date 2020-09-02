@extends('template.head')

@section('title','Show Artikel')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col"><No></No></th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Konten</th>
            <th scope="col">image</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach($artikels as $key =>$artikel)
                <tr>
                    <th scope="row">{{$key}}</th>
                    <td>{{$artikel->judul}}</td>
                    <td>{{$artikel->penulis}}</td>
                    <td>{{$artikel->konten}}</td>
                    <td><img src="{{asset('storage/'.$artikel->image)}}" width="100px" alt="{{'image-'.$key}}"></td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
