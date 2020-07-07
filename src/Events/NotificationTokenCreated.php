<?php

namespace Veldman\Notifications\Events;

class NotificationTokenCreated
{
    /**
     * The newly created token ID.
     *
     * @var string
     */
    public $tokenId;

    /**
     * The ID of the user associated with the token.
     *
     * @var string
     */
    public $userId;

    /**
     * The ID of the client associated with the token.
     *
     * @var string
     */
    public $clientId;

    /**
     * Create a new event instance.
     *
     * @param  string  $tokenId
     * @param  string  $userId
     * @return void
     */
    public function __construct($tokenId, $userId)
    {
        $this->userId = $userId;
        $this->tokenId = $tokenId;
    }
}
