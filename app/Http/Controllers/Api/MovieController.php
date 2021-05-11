<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MovieResource;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::with('genre')
            ->whereHas('genre', function ($query) {
                $query->where('id', 1);
            })
            ->where('is_visible', '1')
            ->get()
        ;

        return MovieResource::collection($movies);
    }

    public function show($id)
    {
        $movies = Movie::findOrFail($id);

        return new MovieResource($movies);
    }
}
