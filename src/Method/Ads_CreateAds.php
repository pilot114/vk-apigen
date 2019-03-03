<?php

namespace VkApigen\Method;

/**
 * Creates ads.
 */
class Ads_CreateAds extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.createAds');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_CreateAds
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe created ads. Description of 'ad_specification' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : Ads_CreateAds
    {
        $this->params['data'] = $data;
        return $this;
    }
}