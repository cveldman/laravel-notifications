<?php

namespace Veldman\Notifications\Traits;

use Veldman\Notifications\Models\Token;

trait HasNotificationTokens
{
    public function tokens()
    {
        return $this->hasMany(Token::class, 'user_id')->orderBy('created_at', 'desc');
    }
}