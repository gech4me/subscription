<?php

namespace App\Facade\Subscription;

use Illuminate\Support\Facades\Facade;

/**
 * @see \App\Services\Subscription\WebsiteService
 */
class WebsiteServiceFacade extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'website-service';
    }
}
