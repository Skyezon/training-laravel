@extends('template.head')

@section('title','Home')

@section('content')
    @if(Session::has('msg'))
        <div class="alert alert-danger">
            {{Session::get('msg')}}
        </div>

    @endif
    <div class="d-flex flex-column">
        <a href="{{route('viewCreateArtikel')}}">create artikel</a>
        <a href="{{route('showArtikel')}}">show all artikel</a>
        <a href="{{route('showMyArtikel')}}">show my artikel</a>
    </div>

@endsection
