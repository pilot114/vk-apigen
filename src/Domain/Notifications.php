<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Notifications
{
    protected $client;
    protected $defaultQuery;
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Notifications\Get
    {
        return new Method\Notifications\Get($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function markAsViewed() : Method\Notifications\MarkAsViewed
    {
        return new Method\Notifications\MarkAsViewed($this->client, $this->defaultQuery, $this->accessTokenType);
    }
    public function sendMessage() : Method\Notifications\SendMessage
    {
        return new Method\Notifications\SendMessage($this->client, $this->defaultQuery, $this->accessTokenType);
    }
}