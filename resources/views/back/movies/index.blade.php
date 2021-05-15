@extends('front.layouts.app')

@section('title', 'Creación de películas - ' . config('app.name'))

@section('main')
    <div class="row">
        <div class="col-md-12">
        <h1>{{ $admin->email }}</h1>


            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Fecha de estreno</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($movies as $movie)
                        <tr>
                            <td>{{ $movie->title }}</td>
                            <td>{{ $movie->release_date->format('d/m/Y') }}</td>
                            <td>
                                Editar - 
                                <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name="delete" class="btn btn-danger">Borrar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $movies->links() }}
        </div>
    </div>
@endsection
