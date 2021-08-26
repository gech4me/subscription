<?php

use App\Http\Controllers\Subscription\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::post('subscribe',[SubscriptionController::class,'store']);
