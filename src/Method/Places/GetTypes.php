<?php

namespace VkApigen\Method\Places;

/**
 * Returns a list of all types of locations.
 */
class GetTypes extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('places.getTypes');
    }
}