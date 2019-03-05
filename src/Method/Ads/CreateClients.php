<?php

namespace VkApigen\Method\Ads;

/**
 * Creates clients of an advertising agency.
 */
class CreateClients extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.createClients');
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
     * Serialized JSON array of objects that describe created campaigns. Description of 'client_specification' objects see below.
     *
     * {"type":"string"}
     */
    public function data(string $data) : self
    {
        $this->params['data'] = $data;
        return $this;
    }
}