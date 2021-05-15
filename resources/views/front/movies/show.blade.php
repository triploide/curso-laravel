@extends('front.layouts.app')

@section('title', $movie->title . ' - ' . config('app.name'))

@section('main')
    <h1>{{ $movie->title }}</h1>

    <p><strong>Fecha de estreno</strong> {{ $movie->release_date->format('d/m/Y') }}</p>
    <p><strong>Rating</strong> {{ $movie->rating }}</p>
    <p><strong>Género</strong> {{ $movie->genre->value }}</p>
@endsection
