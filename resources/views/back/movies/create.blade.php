@extends('front.layouts.app')

@section('title', 'Creación de películas - ' . config('app.name'))

@section('main')
    <div class="row">
        <div class="col-md-8 offset-md-2">

            <h1 style="margin-top: 100px">Crear película</h1>

            @if (count($errors))
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p class="my-1">{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            <form action="/backoffice/movies" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Título</label>
                    {!! Form::text('title', null, ['class' => 'form-control']); !!}
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    {!! Form::textarea('description', null, ['class' => 'form-control']); !!}
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
                    <label for="price">Precio</label>
                    <input class="form-control" type="number" name="price" id="price">
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
                                        <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="custom-control-input" id="tag{{ $tag->id }}">
                                        <label class="custom-control-label" for="tag{{ $tag->id }}">{{ $tag->value }}</label>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                        {{-- <div class="col-md-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                            </div>
                        </div> --}}
                    </div>

                    <div class="form-group">
                        <label for="genre_id">Título</label>
                        <select class="form-control" name="genre_id" id="genre_id">
                            @foreach (\App\Models\Genre::all() as $genre)
                                <option value="{{ $genre->id }}">{{ $genre->value }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="submit" value="Enviar" id="rating">
                </div>
            </form>
        </div>
    </div>
@endsection
