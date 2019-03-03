<?php

namespace VkApigen\Method;

/**
 * Archives clients of an advertising agency.
 */
class Ads_DeleteClients extends \VkApigen\BaseMethod
{
    protected $params = array();
    public function isOpen() : bool
    {
        return false;
    }
    public function __construct($client, $defaultQuery)
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
    public function account_id(int $account_id) : Ads_DeleteClients
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array with IDs of deleted clients.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : Ads_DeleteClients
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}