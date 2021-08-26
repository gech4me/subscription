<?php

namespace App\Providers\Subscription;

use App\Services\Subscription\SubscriptionService;
use Illuminate\Support\ServiceProvider;

class SubscriptionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('subscription-service', function ($app) {
            return $app->make(SubscriptionService::class);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
