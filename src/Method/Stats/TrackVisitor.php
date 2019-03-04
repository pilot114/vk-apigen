<?php

namespace VkApigen\Method\Stats;

/**
 * Нет описания
 */
class TrackVisitor extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('stats.trackVisitor');
    }
}