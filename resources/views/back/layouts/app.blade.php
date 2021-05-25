<!DOCTYPE html>
<html lang="es">
@include('back.partials.head')

<body class="d-flex flex-column">
    @include('back.partials.header')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
            </ol>
            <h2>Blog</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" style="min-height: 450px">

            @yield('main')

        </div>
    </section>

    @include('back.partials.footer')

    @include('back.partials.scripts')

    @stack('scripts')
</body>

</html>
