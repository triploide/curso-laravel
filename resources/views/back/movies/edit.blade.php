@extends('front.layouts.app')

@section('title', 'Creación de películas - ' . config('app.name'))

@section('main')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            {!! Form::model($movie, ['route' => ['admin.movies.update', $movie->id, 'enctype' => 'multipart/form-data']]) !!}
            @method('PUT')
            {{-- <form action="/backend/movies" method="post"> --}}
                <div class="form-group">
                    <label for="title">Título</label>
                    {{-- <input class="form-control" type="text" name="title" id="title"> --}}
                    {!! Form::text('title', null, ['class' => 'form-control']); !!}
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    {!! Form::textarea('description', null, ['class' => 'form-control']); !!}
                </div>

                <div class="form-group">
                    <label for="release_date">Fecha de estreno</label>
                    {!! Form::date('release_date', null, ['class' => 'form-control']); !!}
                </div>

                <div class="form-group">
                    <label for="rating">Rating</label>
                    {!! Form::text('rating', null, ['class' => 'form-control']); !!}
                </div>

                <div class="form-group">
                    <label for="banner">Portada</label>
                    <input class="form-control" type="file" name="banner" id="banner">
                </div>

                <div class="form-group">
                    <label for="genre_id">Título</label>

                    <div class="row">

                        @foreach (\App\Models\Tag::all()->chunk(3) as $cols)
                            <div class="col-md-4">
                                @foreach ($cols as $tag)
                                    <div class="custom-control custom-checkbox">
                                        {{-- <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="custom-control-input" id="tag{{ $tag->id }}"> --}}
                                        {!! Form::checkbox('tags[]', $tag->id, null, ['class' => 'custom-control-input', 'id' => 'tag' . $tag->id]); !!}
                                        <label class="custom-control-label" for="tag{{ $tag->id }}">{{ $tag->value }}</label>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="form-group">
                    <label for="genre_id">Género</label>
                    {!! Form::select('genre_id', $genres, null, ['class' => 'form-control']); !!}
                    {{-- <select class="form-control" name="genre_id" id="genre_id">
                        @foreach (\App\Models\Genre::all() as $genre)
                            <option value="{{ $genre->id }}">{{ $genre->value }}</option>
                        @endforeach
                    </select> --}}
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" value="Enviar" id="rating">
                </div>
            </form>
        </div>
    </div>
@endsection
