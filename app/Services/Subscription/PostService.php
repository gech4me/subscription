<?php

namespace App\Services\Subscription;

use App\Events\SendSubscriptionPostEmail;
use App\Http\Resources\DefaultResource;
use App\Jobs\ProcessSubscriptionJob;
use App\Repositories\Eloquent\PostRepository;

class PostService
{
    private $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function storePost($data): DefaultResource
    {
        $post = $this->repository->create($data);

        ProcessSubscriptionJob::dispatch($post);

        return new DefaultResource($post);
    }
}
