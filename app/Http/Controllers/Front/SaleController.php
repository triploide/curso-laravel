<?php

namespace App\Http\Controllers\Front;

use App\Events\SaleCreated;
use App\Http\Controllers\Controller;
use App\Models\Sale;

class SaleController extends Controller
{
    public function buy()
    {
        $purchase = auth()->user()->purchases()->create(request()->all());

        SaleCreated::dispatch($purchase);

        return redirect()->back();
    }
}
