@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-dark">
        <div class="jumbotron"></div>
        <section class="comics row row-cols-3 g-4 text-white text-center mt-3">
            @forelse($comics as $comicbook)
                <div class="col">
                    <img width="250" src="{{ $comicbook['thumb'] }}" alt="">
                    <h5>{{ $comicbook['series'] }}</h5>
                    <h5>{{ $comicbook['title'] }}</h5>
                    <h5>{{ $comicbook['price'] }}</h5>
                </div>
            @empty
                <div class="col">
                    <p>No comics in this shop yet.</p>
                </div>
            @endforelse
        </section>

    </div>
@endsection
