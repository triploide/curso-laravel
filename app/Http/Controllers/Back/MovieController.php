<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use App\Models\Genre;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('genre')->latest()->paginate(5);

        $admin = auth('admin')->user();

        return view('back.movies.index', compact('movies', 'admin'));
    }

    public function create()
    {
        return view('back.movies.create');
    }

    public function store(MovieRequest $request)
    {
        // $movie = new Movie;
        // $movie->title = request()->input('title');
        // $movie->description = request()->input('description');
        // $movie->release_date = request()->input('release_date');
        // $movie->rating = request()->input('rating');
        // $movie->genre_id = request()->input('genre_id');
        // $movie->save();

        // https://regex101.com/

        $movie = Movie::create($request->all());

        $movie->tags()->sync(request()->input('tags'));

        if (request()->hasFile('banner')) {
            $banner = request()->file('banner');
            $src = $banner->store('movies');
            $movie->banner()->create(['src' => $src]);
        }

        return redirect('backoffice/movies');
    }

    public function edit($id)
    {
        $movie = Movie::find($id);

        $genres = Genre::pluck('value', 'id')->toArray();

        return view('back.movies.edit', compact('movie', 'genres'));
    }

    public function update(MovieRequest $request, $id)
    {
        $movie = Movie::find($id);

        $movie->update($request->all());

        $movie->tags()->sync(request()->input('tags'));

        return redirect('backoffice/movies');
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);

        $movie->delete();

        // return redirect()->back();
    }
}
