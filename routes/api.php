<?php

use App\Http\Controllers\api\ApiCommentControlle;
use App\Http\Controllers\api\ApiPostController;
use Illuminate\Support\Facades\Route;



Route::prefix('v1')->group(function(){
    Route::apiResource('post', ApiPostController::class);
    Route::apiResource('comments',ApiCommentControlle::class);
});