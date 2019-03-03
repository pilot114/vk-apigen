<?php

namespace VkApigen\Method;

/**
 * Removes managers and/or supervisors from advertising account.
 */
class Ads_RemoveOfficeUsers extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.removeOfficeUsers');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int"}
     */
    public function account_id(int $account_id) : Ads_RemoveOfficeUsers
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array with IDs of deleted managers.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : Ads_RemoveOfficeUsers
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}