<?php

use App\Http\Controllers\Subscription\PostController;
use Illuminate\Support\Facades\Route;

Route::post('post',[PostController::class,'store']);
