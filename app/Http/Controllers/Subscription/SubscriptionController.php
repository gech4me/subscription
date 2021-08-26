<?php

namespace App\Http\Controllers\Subscription;

use App\Facade\Subscription\SubscriptionServiceFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class SubscriptionController extends Controller
{

    public function index($email)
    {
        return SubscriptionServiceFacade::getSubscriptions($email);
    }

    public function store(StorePostRequest $request)
    {
        return SubscriptionServiceFacade::storeSubscription($request->only([
            'email',
            'websites'
        ]));
    }

    public function show($id)
    {
        return SubscriptionServiceFacade::showSubscription($id);
    }

    public function update(UpdatePostRequest $request, $email)
    {
        return SubscriptionServiceFacade::updateSubscription($request->only([
            'websites'
        ]), $email);
    }

    public function destroy($email)
    {
        return SubscriptionServiceFacade::destroySubscription($email);
    }
}
