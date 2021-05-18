<?php

namespace App\Providers;

use App\Events\SaleCreated;
use App\Listeners\DecrementsStock;
use App\Listeners\NotifyPurchaseToUser;
use App\Listeners\UpdateStatisticsTable;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // Registered::class => [
        //     SendEmailVerificationNotification::class,
        // ],
        SaleCreated::class => [
            DecrementsStock::class,
            NotifyPurchaseToUser::class,
            UpdateStatisticsTable::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
