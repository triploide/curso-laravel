<?php

namespace App\Listeners;

use App\Events\SaleCreated;
use App\Notifications\PurchaseCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyPurchaseToUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(SaleCreated $event)
    {
        $notification = new PurchaseCreated($event->sale);
        
        $user = $event->sale->user;
        $user->notify($notification);

        \Log::debug('NotifyPurchaseToUser');
    }
}
