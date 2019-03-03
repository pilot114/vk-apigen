<?php

namespace VkApigen\Method;

/**
 * Archives ads.
 */
class Ads_DeleteAds extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.deleteAds');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_DeleteAds
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array with ad IDs.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : Ads_DeleteAds
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}