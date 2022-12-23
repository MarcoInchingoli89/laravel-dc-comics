@extends('layouts.app')

@section('content')
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div>
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Scrivi qui il titolo"
                aria-describedby="titleHlper">
        </div>
        <div>
            <label for="thumb" class="form-label">Comic Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Aggiungi qui l'immagine"
                aria-describedby="titleHlper">
        </div>
        <div>
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control"
                placeholder="Scrivi qui la descrizione" aria-describedby="titleHlper">
        </div>

        <button class="btn btn-primary" type="submit">Aggiungi fumetto</button>
    </form>
@endsection
