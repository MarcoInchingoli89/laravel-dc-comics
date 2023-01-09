@extends('layouts.app')

@section('content')
    @include('partials.errors')
    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf
        @method('PUT')

        <div>
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                placeholder="Scrivi qui il titolo" aria-describedby="titleHlper" required value="{{ $comic->title }}">
        </div>
        <div>
            <label for="thumb" class="form-label">Comic Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror"
                placeholder="Aggiungi qui l'immagine" aria-describedby="titleHlper" value="{{ $comic->thumb }}">
        </div>
        <div>
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description"
                class="form-control @error('description') is-invalid @enderror" placeholder="Scrivi qui la descrizione"
                aria-describedby="titleHlper" value="{{ $comic->description }}">
        </div>
        <div>
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror"
                placeholder="Scrivi qui il prezzo" aria-describedby="titleHlper" value="{{ $comic->price }}">
        </div>
        <div>
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror"
                placeholder="Scrivi qui la serie" aria-describedby="titleHlper" value="{{ $comic->series }}">
        </div>
        <div>
            <label for="sale_data" class="form-label">Sale Date</label>
            <input type="text" name="sale_data" id="sale_data"
                class="form-control @error('sale_date') is-invalid @enderror" placeholder="Scrivi qui la data"
                aria-describedby="titleHlper" value="{{ $comic->sale_date }}">
        </div>
        <div>
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror"
                placeholder="Scrivi qui il tipo" aria-describedby="titleHlper" value="{{ $comic->type }}">
        </div>

        <button class="btn btn-primary" type="submit">Modifica fumetto</button>
    </form>
@endsection
