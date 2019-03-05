<?php

namespace VkApigen\Method\Ads;

/**
 * Removes managers and/or supervisors from advertising account.
 */
class RemoveOfficeUsers extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        $this->accessTokenType = $accessTokenType;
        parent::__construct($client, $defaultQuery);
    }
    public function isAvailable()
    {
        return in_array($this->accessTokenType, ['user']);
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
    public function account_id(int $account_id) : self
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array with IDs of deleted managers.
     *
     * {"type":"string"}
     */
    public function ids(string $ids) : self
    {
        $this->params['ids'] = $ids;
        return $this;
    }
}