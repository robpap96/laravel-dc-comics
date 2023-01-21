@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1>Lista Fumetti</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Immagine</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Data</th>
                    <th scope="col">Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{$comic->title}}</th>
                    <td>{{$comic->description}}</td>
                    <td>{{$comic->thumb}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                </tr>
                @endforeach        
            </tbody>
          </table>
          <button class="btn btn-success"><a href="{{route('comics.create')}}">Inserisci Elemento</a></button>
          {{-- <button class="btn btn-success"><a href="{{route('comics.edit')}}">Modifica Elemento</a></button>
          <button class="btn btn-success"><a href="{{route('comics.destroy')}}">Elimina Elemento</a></button> --}}


    </div>
@endsection