<?php

namespace VkApigen\Method\Database;

/**
 * Returns information about streets by their IDs.
 */
class GetStreetsById extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('database.getStreetsById');
    }
    /**
     * Street IDs.
     *
     * {"type":"array","items":{"type":"integer","minimum":0},"maxItems":1000}
     */
    public function street_ids(array $street_ids) : self
    {
        $this->params['street_ids'] = $street_ids;
        return $this;
    }
}