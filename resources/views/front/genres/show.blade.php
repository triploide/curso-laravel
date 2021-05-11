@extends('front.layouts.app')

@section('title', $genre->value . ' - ' . config('app.name'))

@section('main')
    <h1>{{ $genre->value }}</h1>

    @foreach ($genre->movies as $movie)
        <p><a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a></p>
    @endforeach
@endsection
