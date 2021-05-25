<?php

namespace App\Http\Controllers\Front;

use App\Events\SaleCreated;
use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Movie;
use App\Models\Sale;

class SaleController extends Controller
{
    public function buy()
    {
        $movie = Movie::find(session()->get('checkout.movie'));

        $purchase = auth()->user()->purchases()->create();

        Item::create([
            'price' => $movie->price,
            'movie_id' => $movie->id,
            'movie' => $movie->toArray(),
            'sale_id' => $purchase->id
        ]);

        SaleCreated::dispatch($purchase);

        // return redirect()->back();
    }
}
