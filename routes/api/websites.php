<?php

use App\Http\Controllers\Subscription\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('websites',[WebsiteController::class,'index']);
