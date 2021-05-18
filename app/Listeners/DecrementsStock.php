<?php

namespace App\Listeners;

use App\Events\SaleCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class DecrementsStock
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(SaleCreated $event)
    {
        // $event->sale;

        dd($event->sale->id);

        // Descotar stock de la movie
        // \App\Models\Stock::where('movie_id', $sale->movie_id)->decrements('amount');

        \Log::debug('DecrementsStock');
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //
    }
}
