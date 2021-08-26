<?php

namespace App\Http\Controllers\Subscription;

use App\Facade\Subscription\SubscriptionServiceFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubscriptionRequest;
use App\Http\Requests\UpdateSubscriptionRequest;

class SubscriptionController extends Controller
{

    public function index($email)
    {
        return SubscriptionServiceFacade::getSubscriptions($email);
    }

    public function store(StoreSubscriptionRequest $request)
    {
        return SubscriptionServiceFacade::storeSubscription($request->only([
            'email',
            'website_id'
        ]));
    }

    public function show($id)
    {
        return SubscriptionServiceFacade::showSubscription($id);
    }

    public function update(UpdateSubscriptionRequest $request, $email)
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
