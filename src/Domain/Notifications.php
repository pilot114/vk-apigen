<?php

namespace VkApigen\Domain;

use VkApigen\Method;
class Notifications
{
    protected $client;
    protected $defaultQuery;
    public function __construct($client, $defaultQuery)
    {
        $this->client = $client;
        $this->defaultQuery = $defaultQuery;
    }
    public function get() : Method\Notifications_Get
    {
        return new Method\Notifications_Get($this->client, $this->defaultQuery);
    }
    public function markAsViewed() : Method\Notifications_MarkAsViewed
    {
        return new Method\Notifications_MarkAsViewed($this->client, $this->defaultQuery);
    }
}