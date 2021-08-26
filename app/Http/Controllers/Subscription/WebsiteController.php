<?php

namespace App\Http\Controllers\Subscription;

use App\Facade\Subscription\WebsiteServiceFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWebsiteRequest;
use App\Http\Requests\UpdateWebsiteRequest;

class WebsiteController extends Controller
{

    public function index()
    {
        return WebsiteServiceFacade::getWebsites();
    }

    public function store(StoreWebsiteRequest $request)
    {
        return WebsiteServiceFacade::storeWebsite($request->only([
            'name',
            'domain'
        ]));
    }

    public function show($id)
    {
        return WebsiteServiceFacade::showWebsite($id);
    }

    public function update(UpdateWebsiteRequest $request, $id)
    {
        return WebsiteServiceFacade::updateWebsite($request->only([
            'name',
            'domain'
        ]), $id);
    }

    public function destroy($id)
    {
        return WebsiteServiceFacade::destroyWebsite($id);
    }
}
