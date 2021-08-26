<?php

namespace App\Services\Subscription;

use App\Http\Resources\DefaultResource;
use App\Models\Post;

class PostService
{
    public function storePost($data): DefaultResource
    {
        $post = Post::create($data);

        return new DefaultResource($post);
    }
}
