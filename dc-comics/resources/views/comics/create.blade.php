@extends('layouts.main')

@section('page-content')
    <div class="container">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control" id="title" name="title" maxlength="50" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" maxlength="200">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price*</label>
                <input type="text" class="form-control" id="price" name="price" maxlength="15" required>
            </div>
            <div class="form-group mb-3">
                <label class="active" for="sale_date">Data*</label>
                <input type="date" id="sale_date" name="sale_date">
            </div>
            <div class="mb-3">
                <label class="form-label" for="type" name="type">Tipo*</label>
                <select class="form-select" aria-label="Default select example">
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Inserisci</button>

        </form>
    </div>
@endsection