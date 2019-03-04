<?php

namespace VkApigen\Method\Ads;

/**
 * Returns a list of possible ad categories.
 */
class GetCategories extends \VkApigen\BaseMethod
{
    protected $params = [];
    protected $accessTokenType;
    public function __construct($client, $defaultQuery, string $accessTokenType = null)
    {
        parent::__construct($client, $defaultQuery);
    }
    public function call()
    {
        return $this->onCall('ads.getCategories');
    }
    /**
     * Language. The full list of supported languages is [vk.com/dev/api_requests|here].
     *
     * {"type":"string"}
     */
    public function _lang(string $lang) : self
    {
        $this->params['lang'] = $lang;
        return $this;
    }
}