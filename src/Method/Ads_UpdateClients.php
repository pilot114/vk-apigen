<?php

namespace VkApigen\Method;

/**
 * Edits clients of an advertising agency.
 */
class Ads_UpdateClients extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.updateClients');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_UpdateClients
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe changes in clients. Description of 'client_mod' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : Ads_UpdateClients
    {
        $this->params['data'] = $data;
        return $this;
    }
}