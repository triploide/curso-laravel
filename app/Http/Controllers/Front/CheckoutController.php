<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Movie;

class CheckoutController extends Controller
{
    public function add(Movie $movie)
    {
        session()->put('checkout.movie', $movie->id);

        return redirect('checkout/comprar');
    }

    public function buyForm()
    {
        $movie = Movie::find(session()->get('checkout.movie'));

        return view('front.checkout.buy', compact('movie'));
    }
}
