<?php

namespace App\Listeners;

use App\Events\SaleCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateStatisticsTable
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(SaleCreated $event)
    {
        // $event->sale

        // Agregar data a estadísticas
        \Log::debug('UpdateStatisticsTable');
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
