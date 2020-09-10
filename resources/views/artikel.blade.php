@extends('template.head')

@section('title','Artikel')

@section('content')
    <div class="d-flex justify-content-center">
        <a href="{{route('sendMail')}}">kirim mail</a>
    </div>
    <div class="container">
        <h1 class="jumbotron text-center">
            {{$artikel->judul}}
        </h1>

        <div class="d-flex justify-content-center">
            <img class="w-25 h-25" src="{{asset('storage/'.$artikel->image)}}">
        </div>
        <div class="d-flex flex-column">
            <p>
                {{$artikel->konten}}
            </p>
            <sub class="align-self-end">by {{$artikel->penulis}}</sub>
        </div>


    </div>

@endsection
