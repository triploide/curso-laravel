@extends('front.layouts.app')

@section('main')
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="/">Home</a></li>
                <li>{{ $user->name }}</li>
            </ol>
            <h2>{{ $user->name }}</h2>

        </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" style="min-height: 450px">

            <h1>{{ $user->name }}</h1>

            <h2>//TODO:</h2>

        </div>
    </section>
@endsection
