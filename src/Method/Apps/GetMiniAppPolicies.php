<?php

namespace VkApigen\Method\Apps;

/**
 * Returns policies and terms given to a mini app.
 */
class GetMiniAppPolicies extends \VkApigen\BaseMethod
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
        return $this->onCall('apps.getMiniAppPolicies');
    }
    /**
     * Mini App ID
     *
     * {"type":"int","minimum":0}
     */
    public function app_id(int $app_id) : self
    {
        $this->params['app_id'] = $app_id;
        return $this;
    }
}