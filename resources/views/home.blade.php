@extends('template.head')

@section('title','Home')

@section('content')

    <div class="d-flex flex-column">
        <a href="{{route('viewCreateArtikel')}}">create artikel</a>
        <a href="{{route('showArtikel')}}">show all artikel</a>
    </div>

@endsection
