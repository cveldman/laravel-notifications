<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')
    ->namespace('Veldman\Notifications\Http\Controllers')
    ->prefix('api')
    ->group(function () {

    Route::apiResource('tokens', 'NotificationTokenController')->only('index', 'store');

});
