<?php

use App\Http\Controllers\Api\V1\Admin\BodyApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Bodies
    Route::post('bodies/media', [BodyApiController::class, 'storeMedia'])->name('bodies.store_media');
    Route::apiResource('bodies', BodyApiController::class);
});
