<?php

namespace App\Services\Subscription;

use App\Http\Resources\DefaultResource;
use App\Models\Subscriber;
use App\Repositories\Eloquent\WebsiteRepository;

class SubscriptionService
{
    private $repository;

    public function __construct(WebsiteRepository $repository)
    {
        $this->repository = $repository;
    }

    public function storeSubscription(array $data): DefaultResource
    {
        $website = $this->repository->find($data['website_id']);
        $subscriber = Subscriber::firstOrCreate([
            'email' => $data['email']
        ]);

        $website->subscribers()->save($subscriber);

        return new DefaultResource($subscriber);
    }
}
