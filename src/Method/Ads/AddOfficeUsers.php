<?php

namespace VkApigen\Method\Ads;

/**
 * Adds managers and/or supervisors to advertising account.
 */
class AddOfficeUsers extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('ads.addOfficeUsers');
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
     * Serialized JSON array of objects that describe added managers. Description of 'user_specification' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : self
    {
        $this->params['data'] = $data;
        return $this;
    }
}