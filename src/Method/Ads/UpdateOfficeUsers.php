<?php

namespace VkApigen\Method\Ads;

/**
 * Adds managers and/or supervisors to advertising account.
 */
class UpdateOfficeUsers extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.updateOfficeUsers');
    }
    /**
     * Advertising account ID.
     *
     * {"type":"int","minimum":0}
     */
    public function account_id(int $account_id) : self
    {
        $this->params['account_id'] = $account_id;
        return $this;
    }
    /**
     * Serialized JSON array of objects that describe added managers. Description of 'user_specification' objects see below.
     *
     * {"type":"string","format":"json","items":{"$ref":"objects.json#\/definitions\/ads_user_specification"},"minItems":1,"maxItems":10}
     */
    public function data(string $data) : self
    {
        $this->params['data'] = $data;
        return $this;
    }
}