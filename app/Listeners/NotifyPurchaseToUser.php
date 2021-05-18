<?php

namespace App\Listeners;

use App\Events\SaleCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyPurchaseToUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(SaleCreated $event)
    {
        // $event->sale

        // Enviar mail de compra
        // $mail = new NotifyPurchaseToUser($purchase);
        // \Mail::queue($mail);

        \Log::debug('NotifyPurchaseToUser');
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
