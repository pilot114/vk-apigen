<?php

namespace VkApigen\Method\Utils;

/**
 * Deletes shortened link from user's list.
 */
class DeleteFromLastShortened extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group', 'open', 'service']);
    }
    public function call()
    {
        return $this->onCall('utils.deleteFromLastShortened');
    }
    /**
     * Link key (characters after vk.cc/).
     *
     * {"type":"string"}
     */
    public function key(string $key) : self
    {
        $this->params['key'] = $key;
        return $this;
    }
}