<?php

namespace App\Services\Subscription;

use App\Http\Resources\DefaultResource;
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

        return new DefaultResource($post);
    }
}
