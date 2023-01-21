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
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>@fat</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
          <button class="btn btn-success"><a href="{{route('comics.create')}}">Inserisci Elemento</a></button>
          {{-- <button class="btn btn-success"><a href="{{route('comics.edit')}}">Modifica Elemento</a></button>
          <button class="btn btn-success"><a href="{{route('comics.destroy')}}">Elimina Elemento</a></button> --}}


    </div>
@endsection