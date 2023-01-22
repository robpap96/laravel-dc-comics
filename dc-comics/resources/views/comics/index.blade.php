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
                    <td><img src="{{$comic->thumb}}" alt="{{$comic->title}}" width="100px" height="100px"></td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td>
                        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Vedi</a>
                        <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning">Modifica</a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
                @endforeach        
            </tbody>
          </table>
          <button class="btn btn-success"><a href="{{route('comics.create')}}">Inserisci Elemento</a></button>
    </div>
@endsection