@extends('front.layouts.app')

@section('title', 'Listado de películas - ' . config('app.name'))

@section('main')
    <h1>Listado de películas</h1>

    @foreach ($movies as $movie)
        @php
            \Debugbar::addMessage($movie->title);
        @endphp
        <p>{{ $movie->title }} - Estreno: {{ $movie->release_date }} - Género: {{ $movie->genre->value }}</p>
    @endforeach
@endsection
