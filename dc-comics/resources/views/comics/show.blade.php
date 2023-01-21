@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h2><a href="{{route('comics.index')}}">Torna alla lista</a></h2>
        <h1>{{$comic->title}}</h1>
    </div>
@endsection