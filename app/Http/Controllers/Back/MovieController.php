<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('genre')->latest()->paginate(5);

        return view('back.movies.index', compact('movies'));
    }

    public function create()
    {
        return view('back.movies.create');
    }

    public function store()
    {
        // $movie = new Movie;
        // $movie->title = request()->input('title');
        // $movie->description = request()->input('description');
        // $movie->release_date = request()->input('release_date');
        // $movie->rating = request()->input('rating');
        // $movie->genre_id = request()->input('genre_id');
        // $movie->save();

        Movie::create(request()->all());

        return redirect('backend/movies');
    }

    public function edit($id)
    {
        $movie = Movie::find($id);

        $genres = Genre::pluck('value', 'id')->toArray();

        return view('back.movies.edit', compact('movie', 'genres'));
    }

    public function update()
    {
        //
    }
}
