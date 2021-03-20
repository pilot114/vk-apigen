<?php

namespace VkApigen\Method\Ads;

/**
 * Нет описания
 */
class GetMusicians extends \VkApigen\BaseMethod
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
        return $this->onCall('ads.getMusicians');
    }
    /**
     * Нет описания
     *
     * {"type":"string","minLength":3}
     */
    public function artist_name(string $artist_name) : self
    {
        $this->params['artist_name'] = $artist_name;
        return $this;
    }
}