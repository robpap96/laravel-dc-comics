@extends('layouts.main')

@section('page-content')
    <div class="container">
        <h1>Crea un nuovo fumetto</h1>

        <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" maxlength="50" value="{{ old('title') }}" required>
                @error('title')
                    <div class="alert alert-danger">
                        {{$message}}
                    <div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}
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
                <input type="text" class="form-control  @error('price') is-invalid @enderror" id="price" name="price" maxlength="15" value="{{old('price')}}" required>
                @error('price')
                    <div class="alert alert-danger">
                        {{$message}}
                    <div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="active" for="sale_date">Data*</label>
                <input type="date" class="@error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
                @error('sale_date')
                    <div class="alert alert-danger">
                        {{$message}}
                    <div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="type" name="type">Tipo*</label>
                <select class="form-select  @error('type') is-invalid @enderror">
                    <option value="comic book" {{ old('type') === 'comic book' ? 'selected' : null }}>Comic Book</option>
                    <option value="graphic novel" {{ old('type') === 'graphic novel' ? 'selected' : null }}>Graphic Novel</option>
                </select>
                @error('type')
                    <div class="alert alert-danger">
                        {{$message}}
                    <div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Save</button>
            <button type="reset" class="btn btn-danger">Reset</button>

        </form>
    </div>
@endsection