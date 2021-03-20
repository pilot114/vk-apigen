<?php

namespace VkApigen\Method\Groups;

/**
 * Нет описания
 */
class GetTokenPermissions extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['group']);
    }
    public function call()
    {
        return $this->onCall('groups.getTokenPermissions');
    }
}