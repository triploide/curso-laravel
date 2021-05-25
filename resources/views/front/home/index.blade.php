@extends('front.layouts.app')

@section('main')
    @include('front.home.sections.banner')

    <main id="main">
        @include('front.home.sections.movies')

        @include('front.home.sections.pricing')

        @include('front.home.sections.faq')
        
        @include('front.home.sections.contact')
    </main>
@endsection
