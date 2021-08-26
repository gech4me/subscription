<?php

namespace App\Services\Subscription;

use App\Http\Resources\DefaultCollectionResource;
use App\Repositories\Eloquent\WebsiteRepository;

class WebsiteService
{
    private $repository;

    public function __construct(WebsiteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getWebsites(): DefaultCollectionResource
    {
        $websites = $this->repository->all();

        return new DefaultCollectionResource($websites);
    }
}
