<?php

namespace App\Http\Controllers\Subscription;

use App\Facade\Subscription\PostServiceFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{

    public function index()
    {
        return PostServiceFacade::getPosts();
    }

    public function store(StorePostRequest $request)
    {
        return PostServiceFacade::storePost($request->only([
            'title',
            'description',
            'website_id'
        ]));
    }

    public function show($id)
    {
        return PostServiceFacade::showPost($id);
    }

    public function update(UpdatePostRequest $request, $id)
    {
        return PostServiceFacade::updatePost($request->only([
            'title',
            'description',
            'website_id'
        ]), $id);
    }

    public function destroy($id)
    {
        return PostServiceFacade::destroyPost($id);
    }
}
