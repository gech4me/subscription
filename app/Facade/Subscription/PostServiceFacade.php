<?php

namespace App\Facade\Subscription;

use Illuminate\Support\Facades\Facade;

/**
 * @see \App\Services\Subscription\WebsiteService
 */
class PostServiceFacade extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return 'post-service';
    }
}
