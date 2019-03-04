<?php

namespace VkApigen\Method\Places;

/**
 * Returns information about locations by their IDs.
 */
class GetById extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('places.getById');
    }
    /**
     * Location IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0}}
     */
    public function places(array $places) : self
    {
        $this->params['places'] = $places;
        return $this;
    }
}