<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class HomeController extends Controller
{
    public function index()
    {
        $movies = Movie::with('genre')->limit(6)->get();

        return view('front.home.index');
    }
}
