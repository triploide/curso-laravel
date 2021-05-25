@extends('front.layouts.app')

@section('main')
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Comprar</li>
            </ol>
            <h2>Comprar</h2>

        </div>
    </section><!-- End Breadcrumbs -->
    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" style="min-height: 450px">

            <h1>Comprar</h1>

            <h2>{{ $movie->title }}</h2>

            <p>{!! nl2br($movie->description) !!}</p>

            <p><a href="/buy" class="btn btn-primary">Comprar</a></p>

        </div>
    </section>
@endsection
