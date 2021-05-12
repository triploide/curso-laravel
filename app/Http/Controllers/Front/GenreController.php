<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Genre;

class GenreController extends Controller
{
    public function show($id)
    {
        $genre = Genre::findOrFail($id);

        return view('front.genres.show', compact('genre'));
    }
}
