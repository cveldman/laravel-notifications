<?php

namespace Veldman\Notifications\Http\Controllers;

use Veldman\Notifications\Http\Requests\StoreNotificationTokenRequest;

class NotificationTokenController
{
    public function index() {

    }

    public function store(StoreNotificationTokenRequest $request)
    {
        return $request->validated();
    }
}