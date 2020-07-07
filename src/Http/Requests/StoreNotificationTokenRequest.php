<?php

namespace Veldman\Notifications\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNotificationTokenRequest extends FormRequest
{
    public function rules()
    {
        return [
            'token' => ['required', 'string']
        ];
    }
}
