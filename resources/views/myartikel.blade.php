@extends('template.head')

@section('title','Kumpulan artikelku')

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
                <td><a href="{{route('getArtikel',$artikel->id)}}">{{$artikel->judul}}</a></td>
                <td>{{$artikel->penulis}}</td>
                <td>{{$artikel->konten}}</td>
                <td><img src="{{asset('storage/'.$artikel->image)}}" width="100px" alt="{{'image-'.$key}}"></td>
                <td>
                    <a href="{{route('showUpdateArtikel',$artikel->id)}}" class="btn btn-success">Edit</a>
                    <form action="{{route('deleteArtikel',['id' => $artikel->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" value="submit">Delete</button>
                    </form>
                    {{--                        <a href="{{route('deleteArtikel',$artikel->id)}}" class="btn btn-danger">delete</a>--}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{--    {{ $artikels->links() }}--}}
@endsection
