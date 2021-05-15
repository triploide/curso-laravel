@extends('front.layouts.app')

@section('title', 'Creación de películas - ' . config('app.name'))

@section('main')
    <div class="row">
        <div class="col-md-8 offset-md-2">

            @if (count($errors))
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p class="my-1">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="/backoffice/movies" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Título</label>
                    <input class="form-control" type="text" name="title" id="title">
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    <textarea class="form-control" name="description" id="description"></textarea>
                </div>

                <div class="form-group">
                    <label for="release_date">Fecha de estreno</label>
                    <input class="form-control" type="date" name="release_date" id="release_date">
                </div>

                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input class="form-control" type="number" name="rating" id="rating">
                </div>
                

                <div class="form-group">
                    <label for="genre_id">Título</label>
                    <select class="form-control" name="genre_id" id="genre_id">
                        @foreach (\App\Models\Genre::all() as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->value }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" value="Enviar" id="rating">
                </div>
            </form>
        </div>
    </div>
@endsection
