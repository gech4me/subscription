<?php

namespace App\Facade\Subscription;

use Illuminate\Support\Facades\Facade;

/**
 * @see \App\Services\Subscription\WebsiteService
 */
class SubscriptionServiceFacade extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'subscription-service';
    }
}
