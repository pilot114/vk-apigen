<?php

namespace VkApigen\Method\Ads;

/**
 * Archives clients of an advertising agency.
 */
class DeleteClients extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('ads.deleteClients');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : self
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array with IDs of deleted clients.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : self
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}