@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1>Modifica: {{$comic->title}}</h1>

        <form action="{{route('comics.update', $comic->id)}}" method="Post">
            @csrf

            @method('PUT')
            <div class="mb-3"> 
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" maxlength="50" value="{{ old('title') }}" required>
                @error('title')
                    <div class="alert alert-danger">
                        {{$message}}
                    <div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{old('description')}}</textarea>
                @error('description')
                    <div class="alert alert-danger">
                        {{$message}}
                    <div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" maxlength="200" value="{{old('thumb')}}">
                @error('thumb')
                    <div class="alert alert-danger">
                        {{$message}}
                    <div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price*</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" maxlength="15" required value="{{old('price')}}">
                @error('price')
                    <div class="alert alert-danger">
                        {{$message}}
                    <div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="active" for="sale_date">Data*</label>
                <input type="date" id="sale_date" class="@error('sale_date') is-invalid @enderror" name="sale_date" value="{{old('sale_date')}}">
                @error('sale_date')
                    <div class="alert alert-danger">
                        {{$message}}
                    <div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="type" name="type">Tipo*</label>
                <select class="form-select @error('type') is-invalid @enderror">
                    <option value="comic book" {{ old('type', $comic->type) === 'comic book' ? 'selected' : null }}>Comic Book</option>
                    <option value="graphic novel" {{ old('type', $comic->type) === 'graphic novel' ? 'selected' : null }}>Graphic Novel</option>
                </select>
                @error('type')
                    <div class="alert alert-danger">
                        {{$message}}
                    <div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Invia</button>

        </form>
    </div>
@endsection