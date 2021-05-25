<!DOCTYPE html>
<html lang="es">
@include('front.partials.head')
<body class="d-flex flex-column">
    @include('front.partials.header')
    
    @yield('main')

    @include('front.partials.footer')

    @include('front.partials.scripts')

    @stack('scripts')
</body>
</html>