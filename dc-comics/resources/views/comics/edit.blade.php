@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1>Modifica: {{$comic->title}}</h1>

        <form action="{{route('comics.update', $comic->id)}}" method="Post">
            @csrf

            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control" id="title" name="title" maxlength="50" value="{{$comic->title}}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{$comic->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" maxlength="200" value="{{$comic->thumb}}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price*</label>
                <input type="text" class="form-control" id="price" name="price" maxlength="15" required value="{{$comic->price}}">
            </div>
            <div class="form-group mb-3">
                <label class="active" for="sale_date">Data*</label>
                <input type="date" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
            <div class="mb-3">
                <label class="form-label" for="type" name="type">Tipo*</label>
                <select class="form-select">
                    <option value="comic book" {{ $comic->type === 'comic book' ? 'selected' : null }}>Comic Book</option>
                    <option value="graphic novel" {{ $comic->type === 'graphic novel' ? 'selected' : null }}>Graphic Novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Invia</button>

        </form>
    </div>
@endsection