@extends('front.layouts.app')

@section('title', 'Listado de películas - ' . config('app.name'))

@section('main')
    <h1>Listado de películas</h1>

    <div class="row">
        @forelse ($movies as $movie)
            @php
                \Debugbar::addMessage($movie->title);
            @endphp

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="/storage/{{ $movie->banner->src }}" class="card-img-top" alt="Imagen de {{ $movie->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ \Str::limit($movie->description, 80) }}</p>
                        <p class="card-text">{{ $movie->tags->pluck('value')->implode(', ') }}</p>
                        <form action="/buy" method="POST">
                            @csrf
                            <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                            <button name="submit" type="submit" class="btn btn-primary">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <p>{{ $movie->title }} - Estreno: {{ $movie->release_date }} - Género: {{ $movie->genre->value }}</p> --}}
        @empty
            <div class="col-md-12">
                <p class="h3 mt-5 text-center">Todavía no hay pelis, volvé en un par de días</p>
            </div>
        @endforelse
    </div>

    
@endsection
