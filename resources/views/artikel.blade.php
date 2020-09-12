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
    <form class="form-group" enctype="multipart/form-data" action="{{route('createComment',$artikel->id)}}" method="post">
        @csrf
        <textarea class="form-control mt-5 mx-4" cols="10" placeholder="input your comment" name="comment"></textarea>
        <button type="submit" class="ml-4 mt-3 btn btn-primary">Submit</button>
    </form>

    @foreach($artikel->commentUsers as $user)
        <div class="alert alert-success d-flex justify-content-center align-items-center">
            <p>{{$user->pivot->comment}}</p>
            <sub>by {{$user->name}}</sub>
        </div>
    @endforeach

@endsection
