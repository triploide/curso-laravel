<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de pelis</title>
    @include('front.styles.extra')
</head>
<body>
    
    @if(count($pelis) > 5)
        <h1>Hay un montón de pelis</h1>
    @elseif(count($pelis) > 2)
        <h1>Listado de pelis</h1>
    @else
        <h1>Hay una sola peli</h1>
    @endif

    @foreach($pelis as $peli)
        {{-- @php
            dd($loop)
        @endphp --}}

        <p class="{{ $loop->odd ? 'gris' : '' }}">{{ $peli }}</p>
    @endforeach

    @foreach($pelis as $peli)
        <span>{{ $peli }}</span>
        @if (!$loop->last)
            > 
        @endif
    @endforeach


    @for ($i = 0; $i < 5; $i++)
        <p>{{ $i }}</p>
    @endfor
</body>
</html>