<?php

namespace VkApigen\Method\Groups;

/**
 * Нет описания
 */
class DisableOnline extends \VkApigen\BaseMethod
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
        return in_array($this->accessTokenType, ['user', 'group']);
    }
    public function call()
    {
        return $this->onCall('groups.disableOnline');
    }
    /**
     * Нет описания
     *
     * {"type":"int","format":"int64","minimum":1,"entity":"owner"}
     */
    public function group_id(int $group_id) : self
    {
        $this->params['group_id'] = $group_id;
        return $this;
    }
}